<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM dokter where DokterID='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['DokterID']=$data['DokterID'];
$row['Nama']=$data['Nama'];
$row['Spesialis']=$data['Spesialis'];
$row['NoTelp']=$data['NoTelp'];

echo json_encode($row);

?>