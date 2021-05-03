<?php
// include database connection file
include 'koneksi.php';
$PendaftaranID = $_POST['PendaftaranID'];
$PasienID = $_POST['PasienID'];
$NoKTP = $_POST['NoKTP'];
$Nama= $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$TglLahir = $_POST['TglLahir'];
$NoTelp = $_POST['NoTelp'];
$RiwayatPenyakit = $_POST['RiwayatPenyakit'];
$sql = "UPDATE pasien SET NoKTP='$NoKTP',Nama='$Nama',Alamat='$Alamat',TglLahir='$TglLahir',NoTelp = '$NoTelp',RiwayatPenyakit='$RiwayatPenyakit' WHERE PasienID ='$PasienID'";
$result = mysqli_query($koneksi,$sql );
if($result){
    echo "Data Berhasil Disimpan";
        header("location:pendaftaran.php");
}else{
    echo "Gagal Disimpan";
}
?>