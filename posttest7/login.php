<?php
    session_start();


    require 'config.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username='$user' OR email='$user'";
        $result = $db->query($sql);

        // cek akun ada atau ngga
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            // cek password valid atau ngga
            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = $username;

                echo "
                    <script>
                        alert('Selamat Datang $username');
                        document.location.href = 'index.php';
                    </script>";
            }else{
                echo "
                    <script>
                        alert('Username dan Password Salah');
                    </script>";
            }
        }else{
            echo "
                <script>
                    alert('Username tidak terdaftar, silahkan registrasi terlebih dahulu');
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-2.css">
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>LOGIN USER</h1>
        <div class="form-login">
            <form id="login-form" action="" method="post">
            <img class="logo" src="pictures/AimerLogo.png" alt="logo AIMER" height="60px">
            <div class="txt_field">
                <input type="text" name="user" placeholder="email atau username" class="input">
            </div>    
            <div class="txt_field">
                <input type="password" name="password" placeholder="password" class="input">
            </div>
                <input type="submit" name="login" value="Login" class="submit"><br><br>
            </form>

            <p align="center" class="btn">Belum punya akun?
                <a href="register.php">Register</a>
            </p>
        </div>
    </div>
</body>
</html>

