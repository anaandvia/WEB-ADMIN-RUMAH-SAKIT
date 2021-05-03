<?php 
include 'koneksi.php';
$PasienID = $_POST['PasienID'];
$NoKTP = $_POST['NoKTP'];
$Nama= $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$TglLahir = $_POST['TglLahir'];
$NoTlp = $_POST['NoTlp'];
$RiwayatPenyakit = $_POST['RiwayatPenyakit'];
$input = mysqli_query($koneksi,"INSERT INTO pasien VALUES('$PasienID','$NoKTP','$Nama','$Alamat','$TglLahir','$NoTlp','$RiwayatPenyakit')") or die(mysql_error());
if($input){
    echo "Data Berhasil Disimpan";
        header("location:pasien.php");
}else{
    echo "Gagal Disimpan";
}
?>