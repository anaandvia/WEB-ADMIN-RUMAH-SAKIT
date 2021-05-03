<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form 
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select* from user where username ='$username' and password='$password'");
 if(mysqli_num_rows($data)>0){
 $row= mysqli_fetch_array($data); //membuat session
 
            $_SESSION['user'] = $row['username'];
            $_SESSION['pass'] = $row['password'];

    header("location:dashboard.php");
 }else{
    echo "Data Anda Tidak Valid";
 }
 ?>