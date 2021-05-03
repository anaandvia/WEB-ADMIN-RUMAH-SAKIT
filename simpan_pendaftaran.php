<?php 
include 'koneksi.php';
$PendaftaranID = $_POST['PendaftaranID'];
$PasienID = $_POST['PasienID'];
$NoKTP = $_POST['NoKTP'];
$Nama= $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$TglLahir = $_POST['TglLahir'];
$NoTelp = $_POST['NoTelp'];
$RiwayatPenyakit = $_POST['RiwayatPenyakit'];
$input = "INSERT INTO pasien VALUES('$PasienID','$NoKTP','$Nama','$Alamat','$TglLahir','$NoTelp','$RiwayatPenyakit')";
$input2 = "INSERT INTO pendaftaran VALUES('$PendaftaranID','$PasienID')";
mysqli_query($koneksi,$input);
mysqli_query($koneksi,$input2);
// or die(mysql_error());
if($input && $input2){
    echo "Data Berhasil Disimpan";
        header("location:pendaftaran.php");
}else{
    echo "Gagal Disimpan";
}
?>