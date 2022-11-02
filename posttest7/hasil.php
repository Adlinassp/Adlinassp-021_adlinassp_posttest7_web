<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
    <link rel="stylesheet" href="hasil.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body>
    <header class="wraper">
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
    </header>
    <div class="container">
        <div class="main-content">
            <div class="content-me">Booked List</div> 
           <div class="nav_search">
                <a class="tambah" href="index.php">Tambah Data</a><br>
                <form class="cari" action="" method="get">
                    <label for="search"></label>
                    <input class="cari1" type="text" name="search" placeholder="Search...">
                </form> 
           </div>
        </div>
        <div class="content">
            <div class="main-content">
                <table class="tabel"  cellpadding="15">
                    <tr>
                        <th>No</th>
                        <th>Nama Pengunjung</th>
                        <th>ID Pengunjung</th>
                        <th>Email Pengunjung</th>
                        <th>Gender</th>
                        <th>Tanggal Booking</th>
                        <th>Gambar</th>
                        <th>Tanggal membooking</th>
                        <th colspan='2'>action</th>
                    </tr>
                    <?php
                        $i = 1;

                        require 'config.php';
                        $result = mysqli_query($db, "SELECT * FROM booking");
                     
                     
                        if (isset($_GET['search'])){
                         $result = mysqli_query($db, "SELECT * FROM booking WHERE nama LIKE '%".
                             $_GET['search']."%'");
                        }
                     
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr class=data>
                        <td><?=$i; ?></td>
                        <!-- <td>no</td> -->
                        <td><?=$row['nama']?></td>
                        <td><?=$row['tanda']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['gender']?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><img src="gambar/<?=$row['gambar']?>" alt="" width="100px"></td>
                        <td><?=$row['tanggal_booking']?></td>
                        <td><a class=data href="edit.php?id=<?=$row['id']?>">edit</a></td>
                        <td><a class=data href="hapus.php?id=<?=$row['id']?>">hapus</a></td>
                        
                    </tr>
                    
                        <?php
                        $i++;
                            }
                        ?>
                </table>
            </div>
        </div>
        
    </div>
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