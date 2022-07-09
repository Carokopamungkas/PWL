<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

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
            <h3>Tambah Data Produk Sepatu</h3>
            <div class="box">
               <form action="" method="POST" enctype="multipart/form-data">
                   <select class="input-control" name="kategori" required>
                       <option value="">--Pilih--</option>
                       <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY kategori_id DESC");
                        while($r = mysqli_fetch_array($kategori)){

                       ?>

                        <option value="<?php echo $r['kategori_id'] ?>"><?php echo $r['kategori_name']?></option>
                        <?php } ?>
                   </select>
                   <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                   <input type="text" name="harga" class="input-control" placeholder="Harga" required>
                   <input type="text" name="size" class="input-control" placeholder="Size" required>
                   <input type="file" name="gambar" class="input-control" required>
                   <input type="submit" name="submit" value="Submit" class="btn">
                   
               </form>
               <?php
                    if(isset($_POST['submit'])){

                        //print_r($_FILES['gambar']);
                        // menampung inputan dari form
                        $kategori   = $_POST['kategori'];
                        $nama       = $_POST['nama'];
                        $harga      = $_POST['harga'];
                        $size       = $_POST['size'];
                        

                        //menampung data file yang diupload
                        $filename =$_FILES['gambar']['name'];
                        $tmp_name =$_FILES['gambar']['tmp_name'];

                        $type1 = explode('.', $filename);
                        $type2 = $type1[1];

                        $newname = 'produk'.time().'.'.$type2;


                        //menampng format file yang diizinkan
                        $tipe_diizinkan = array('jpg', 'jpeg', 'png');


                        // validasi format file
                        if(!in_array($type2, $tipe_diizinkan)){
                            //jika tipe array tidak diizinkan
                            echo '<script>alert("format file tidak diizinkan")</script>';
                        }else{
                            // jika format file sesuai yang ada dalam array tipe diizinkan
                            //proses upload file sekalisgus ke database
                           move_uploaded_file($tmp_name, './produk/'.$newname);

                           $insert = mysqli_query($conn, "INSERT INTO tb_produk VALUES (
                                    null,
                                    '".$kategori."',
                                    '".$nama."',
                                    '".$harga."',
                                    '".$size."',
                                    '".$newname."'
                                        ) ");

                           if($insert){
                                echo '<script>alert("simpan data berhasil")</script>';
                                echo '<script>window.location="data-produk.php"</script>';
                              
                           }else{
                                echo 'gagal '.mysqli_error($conn);
                           }

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