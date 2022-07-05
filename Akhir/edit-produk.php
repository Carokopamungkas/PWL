<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $produk = mysqli_query($conn, "SELECT * FROM tb_produk WHERE produk_id = '".$_GET['id']."' ");
    if(mysqli_num_rows($produk) == 0){
      echo '<script>window.location="data-produk.php"</script>';

    }
    $p = mysqli_fetch_object($produk);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Garage Sepatu</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Garage Sepatu</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                 <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Edit Data Produk Sepatu</h3>
            <div class="box">
               <form action="" method="POST" enctype="multipart/form-data">
                   <select class="input-control" name="kategori" required>
                       <option value="">--Pilih--</option>
                       <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id DESC");
                        while($r = mysqli_fetch_array($kategori)){

                       ?>

                        <option value="<?php echo $r['kategori_id'] ?>"<?php echo ($r['kategori_id'] == $p->kategori_id)?'selected':''?>><?php echo $r['kategori_name']?></option>
                        <?php } ?>
                   </select>
                   <input type="text" name="nama" class="input-control" placeholder="Nama Produk" value ="<?php echo $p->produk_name ?>" required>
                   <input type="text" name="harga" class="input-control" placeholder="Harga" value ="<?php echo $p->produk_harga ?>"required>
                   <input type="text" name="size" class="input-control" placeholder="Size" value ="<?php echo $p->produk_size ?>" required>
                   
                   <img src="produk/<?php echo $p->produk_gambar ?>" width="200px">
                   <input type="hidden" name="foto" value="<?php echo $p->produk_gambar ?>">
                   <input type="file" name="gambar" class="input-control">
                   <input type="submit" name="submit" value="Submit" class="btn">
                   
               </form>
               <?php
                    if(isset($_POST['submit'])){

                        // data inputan dari form

                        $kategori   = $_POST['kategori'];
                        $nama       = $_POST['nama'];
                        $harga      = $_POST['harga'];
                        $size       = $_POST['size'];
                        $foto       = $_POST['foto'];

                        // tampung data gambar yang baru
                        $filename =$_FILES['gambar']['name'];
                        $tmp_name =$_FILES['gambar']['tmp_name'];

                      

                        // jika admin ganti gambar
                        if($filename != ''){
                            $type1 = explode('.', $filename);
                        $type2 = $type1[1];

                        $newname = 'produk'.time().'.'.$type2;

                        //menampng format file yang diizinkan
                        $tipe_diizinkan = array('jpg', 'jpeg', 'png');

                              if(!in_array($type2, $tipe_diizinkan)){
                                //jika tipe array tidak diizinkan
                                echo '<script>alert("format file tidak diizinkan")</script>';
                            }else{
                              unlink('./produk/'.$foto);
                              move_uploaded_file($tmp_name, './produk/'.$newname);
                              $namagambar = $newname;


                            }



                        }else{
                          // jika admin tidak ganti gambar
                          $namagambar = $foto;

                        }

                       
                        //query update data produk

                        $update = mysqli_query($conn, "UPDATE tb_produk SET
                                                  kategori_id   = '".$kategori."',
                                                  produk_name   = '".$nama."',
                                                  produk_harga  = '".$harga."',
                                                  produk_size   = '".$size."',
                                                  produk_gambar = '".$namagambar."'
                                                  WHERE produk_id = '".$p->produk_id."' ");
                        if($update){
                                echo '<script>alert("Update data berhasil")</script>';
                                echo '<script>window.location="data-produk.php"</script>';
                              
                        }else{
                                echo 'gagal '.mysqli_error($conn);
                        }

                    }

               ?>

            </div>

           

            </div>


        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Garage Sepatu</small>
        </div>   
    </footer>
</body>
</html>