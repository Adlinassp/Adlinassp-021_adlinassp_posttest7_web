<?php
   
   require 'config.php';

   if(isset($_GET['id'])){
    $id = $_GET['id'];
   }


    $result = mysqli_query($db, 
      "SELECT * FROM booking WHERE id='$id'");
    $row = mysqli_fetch_array($result);


   if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $tanda = $_POST['tanda'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $tanggal = $_POST['tanggal'];
        $tanggal_booking = $_POST['tanggal_booking'];
        
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";
       
        $tmp = $_FILES['gambar']['tmp_name'];
       
        if(move_uploaded_file($tmp, "gambar/".$gambar_baru)){

       $result = mysqli_query($db, 
       "UPDATE booking SET 
       nama='$nama',
       tanda='$tanda',
       email='$email',
       gender='$gender',
       tanggal='$tanggal',
       gambar='$gambar_baru',
       tanggal_booking='$tanggal_booking'
       WHERE id='$id'
       ");

       if($result){
        echo "
            <script>
               alert('Data berhasil di edit');
               document.location.href = 'hasil.php'
            </script>
            ";
       }
       else{
        echo "
            <script>
               alert('Data gagal di edit');
            </script>
            ";
       }

   
}}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=l, initial-scale=1.0">
    <title>Update Page</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <nav class="wraper">   
            <img class="logo" src="pictures/AimerLogo.png" alt="logo AIMER" height="60px">  
            <div>
                <ul class="nav_links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Look Our Cafe</a></li>
                    <li><a href="index.php">Book a Visit</a></li>
                    <li><a href="hasil.php">Look Our Booked</a></li>
                    <li><a href="about.html">About Me</a></li>
                </ul>
            
            </div>
        <a chref="#"><button class="contact">Contact</button></a>
        </nav>
    </header>

    <main>
        <div class="main-content">
            <div align="" class="content-img"><img src="pictures/cat2.png" ></div>
            <div class="main-text"><h2>AIMER :<br>Cat & Coffee Update Page</h2>
                <p class="sub-content">-UPDATE DATA-<br>"Edit Your Data in Here for enjoy the visit"</p></div>  
        </div>  
        <button class="button2" id='btn'>Look Our Cafe</button>  
        

        
        <div id="book" class="sec-content-form">
            <h2>UPDATE BOOK A VISIT</h2><br>
            <form action="" method="post" enctype="multipart/form-data">
           <!-- form field di sini -->
           <table>
            <div class="formgrup1">
                    <label>Nama Pengunjung:</label>
                    <input type="text" name="nama" placeholder="Nama lengkap..." />
            </div>
            <div class="formgrup1">
                    <label>ID Pengunjung:</label>
                    <input type="number" name="tanda" placeholder="ID Pengunjung..." />
            </div>
            <div class="formgrup1">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Email Pengunjung..." />
            </div>
            <div  class="formgrup2">
                    <label>Tanggal Booking:</label>
                    <input type="date" name="tanggal" />
            </div>
            <div class="formgrup3">
                    <label>Jenis kelamin:</label>
                    <label><input type="radio" name="gender" value="laki-laki" /> Laki-laki</label>
                    <label><input type="radio" name="gender" value="perempuan" /> Perempuan</label>
            </div>
            <div class="formgrup1">
                <label for="">Upload Gambar Selfie : </label>
                <input type="file" name = "gambar"><br><br>
            </div>
            <div class="formgrup">
                <input type="hidden" name="tanggal_booking" value=<?=date("d-m-Y")?>>
                <input type="submit" name="submit" class="submit" value="Book a Visit" />
            </div>

     
           </table>
           </form>
           </div>



        <div class="sec-content">
            <h2>DONATE ME!</h2>
        <section class="section-card">
            <div class="card card-1">
                <img src="pictures/cat3.png" class="card_img">
                <div class="card-details">
                    <ul>
                        <li>All you need is love and a cat.</li>
                        <li>Not all angels have wings. Sometimes they have whiskers.</li>
                    </ul>
                </div>
                <a href="#popup" class="btn1">Donate Me</a>
            </div>
            <div class="card card-2">
                <img src="pictures/cat4.jpg" class="card_img">
                <div class="card-details">
                    <ul>
                        <li>All you need is love and a cat.</li>
                        <li>Not all angels have wings. Sometimes they have whiskers.</li>
                    </ul>
                </div>
                <a href="#popup" class="btn1">Donate Me</a>
            </div>
            <div class="card card-3">
                <img src="pictures/cat5.png" class="card_img">
                <div class="card-details">
                    <ul>
                        <li>All you need is love and a cat.</li>
                        <li>Not all angels have wings. Sometimes they have whiskers.</li>

                    </ul>
                </div>
                <a href="#popup" class="btn1">Donate Me</a>
            </div>

        </section>
        </div>
        <div class="popup" id="popup">
            <div class="popup_content">
                <div class="popup_img">
                    <img src="pictures/cat3.png">
                    <img src="pictures/cat4.jpg">
                    <img src="pictures/cat5.png">
                </div>
                <div class="popup_header">
                    <h1>Start Donate Our furry</h1>
                    <h2>Plese read these terms before Donate</h2>
                </div>
                <a href="#" class="btn1 popup_btn">Donate Now</a>
            </div>
        </div>
    </main>

    <div class="footer">
        <ul class="footer-me">
            <ul class="footer-logo">
                <div align="center" class="image"><img src="pictures/AimerLogo.png" alt="AimerLogo" height="50px"></div>
                <div class="footer-owner"> © 2022 AIMER Cat & Coffee Co. Ltd.</div>
            </ul>
            <ul class="footer-me1">
                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i>   Instagram</a></li>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i>   Facebook</a></li>
                <li><a href="#" title="youtube"><i class="fa fa-youtube"></i>   YouTube</a></li>
            </ul>
            <button class="gelap" onclick="ubahwarna()">Change Dark Mode</button>
            <button class="terang" onclick="ubahwarna()">Change Light Mode</button>
        </ul>
    </div>
    <div class="footer-copyright">
        Copyright &copy; 2022 Designed by Adlina Safa Sephia Putri. All rights reserved. AIMER | Cat & Coffee. co.Ltd.
    </div>

    <script src="main.js"></script>
</body>
</html>
