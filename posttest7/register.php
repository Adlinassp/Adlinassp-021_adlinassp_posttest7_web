<?php
    
    require 'config.php';

    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        //cek username sudah digunakan atau belum
        $sql = "SELECT * FROM akun WHERE username = '$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo 
            "<script>
                alert('Username telah digunakan, silahkan gunakan username lain');
            </script>";
        }else{
            //cek konfirmasi password
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun(email, username, psw)
                        VALUES ('$email','$username','$password')";
                $result = $db->query($query);
                if($result){
                    echo 
                        "<script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'login.php';
                        </script>";
                }else{
                    echo 
                        "<script>
                            alert('Registrasi Gagal');
                        </script>";
                }
            }else{
                echo 
                    "<script>
                        alert('Konfirmasi Password Salah!');
                    </script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-1.css">
    <title>Register</title>
</head>
<body>
    <div class="center">
        <h1>Register USER</h1> 
        <form id="login-form" action="" method="post">    
            <img class="logo" src="pictures/AimerLogo.png" alt="logo AIMER" height="60px">
            <div class="txt_field">
                <input type="email" name="email" class="input" placeholder="Masukkan email"><br>
            </div>
            <div class="txt_field">
                <input type="text" name="username" class="input" placeholder="Masukkan username"><br>
            </div>
            <div class="txt_field">
                <input type="password" name="password" class="input" placeholder="Password"><br>
            </div>
            <div class="txt_field">
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br>
            </div>
                <input type="submit" name="regis" class="submit" value="Registrasi"><br><br>
            </form>

            <p align="center" class="btn">Sudah punya akun?
                <a href="login.php">Login</a>
            </p>
        
    </div>
</body>
</html>

