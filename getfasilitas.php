<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM fasilitas where FasilitasID='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['FasilitasID']=$data['FasilitasID'];
$row['Nama']=$data['Nama'];
$row['Harga']=$data['Harga'];

echo json_encode($row);

?>