<?php

$connect = mysqli_connect("localhost","root","","hotel_reservation");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
}
?>