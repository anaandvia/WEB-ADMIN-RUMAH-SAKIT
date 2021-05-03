<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM obat where ObatID='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['ObatID']=$data['ObatID'];
$row['Nama']=$data['Nama'];
$row['JenisObat']=$data['JenisObat'];
$row['TglKadarluasa']=$data['TglKadarluasa'];
$row['Harga']=$data['Harga'];

echo json_encode($row);

?>