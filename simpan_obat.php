<?php 
include 'koneksi.php';
$ObatID = $_POST['ObatID'];
$Nama = $_POST['Nama'];
$JenisObat= $_POST['JenisObat'];
$TglKadarluasa = $_POST['TglKadarluasa'];
$Harga = $_POST['Harga'];
$input = mysqli_query($koneksi,"INSERT INTO obat VALUES('$ObatID','$Nama','$JenisObat','$TglKadarluasa','$Harga')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:obat.php");
}else{
    echo "Gagal Disimpan";
}
?>