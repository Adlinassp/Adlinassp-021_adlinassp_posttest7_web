<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db, 
        "DELETE FROM booking WHERE id='$id'");

    if($result){
        header("Location:hasil.php");
    }
}