<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login | Garage Sepatu</title>
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login Pelanggan</h2>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="email" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();

                include'koneksi.php';

                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $pass = mysqli_real_escape_string($conn,$_POST['pass']);

                $cek = mysqli_query($conn, "SELECT * FROM tb_pembeli WHERE email_pembeli = '".$email."'AND password_pembeli = '".MD5($pass)."'");
                if(mysqli_num_rows($cek) > 0){
                    $a = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d ;
                    $_SESSION['id'] = $a->email_pembeli;
                    echo '<script>window.location="checkout.php"</script>';
                }else{
                    echo '<script>alert("Email atau Password Anda salah!")</script>';
                }


            }
        ?>   
    </div>   
    
</body>
</html>