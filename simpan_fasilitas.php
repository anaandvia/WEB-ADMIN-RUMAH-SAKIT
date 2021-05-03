<?php 
include 'koneksi.php';
$FasilitasID = $_POST['FasilitasID'];
$Nama = $_POST['Nama'];
$Harga = $_POST['Harga'];
$input = mysqli_query($koneksi,"INSERT INTO fasilitas VALUES('$FasilitasID','$Nama','$Harga')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:fasilitas.php");
}else{
    echo "Gagal Disimpan";
}
?>