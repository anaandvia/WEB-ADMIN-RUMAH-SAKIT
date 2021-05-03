<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT pendaftaran.PendaftaranID, pasien.PasienID,pasien.NoKTP, pasien.Nama, pasien.Alamat, pasien.TglLahir , pasien.NoTelp, pasien.RiwayatPenyakit FROM pendaftaran , pasien where pendaftaran.PasienID = pasien.PasienID = '$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['PendaftaranID']=$data['PendaftaranID'];
$row['PasienID']=$data['PasienID'];
$row['NoKTP']=$data['NoKTP'];
$row['Nama']=$data['Nama'];
$row['Alamat']=$data['Alamat'];
$row['TglLahir']=$data['TglLahir'];
$row['NoTelp']=$data['NoTelp'];
$row['RiwayatPenyakit']=$data['RiwayatPenyakit'];
echo json_encode($row);

?>