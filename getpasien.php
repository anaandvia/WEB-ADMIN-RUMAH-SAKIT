<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM pasien where PasienID='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['PasienID']=$data['PasienID'];
$row['NoKTP']=$data['NoKTP'];
$row['Nama']=$data['Nama'];
$row['Alamat']=$data['Alamat'];
$row['TglLahir']=$data['TglLahir'];
$row['NoTelp']=$data['NoTelp'];
$row['RiwayatPenyakit']=$data['RiwayatPenyakit'];

echo json_encode($row);

?>