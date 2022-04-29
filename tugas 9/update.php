<?php

include('connection.php');

$npm = $_GET["npm"];
$nama = $_GET["nama"];
$asal = $_GET["asal"];
$jurusan = $_GET["jurusan"];
$nilai_akhir= $_GET["nilai_akhir"];

$sql = "UPDATE mhs SET nama = '$nama', asal = '$asal', jurusan = '$jurusan', nilai_akhir = '$nilai_akhir' WHERE npm = '$npm'";

$query = mysqli_query($conn, $sql);

if($query){
    $msg = "Update data berhasil";
}
else{
    $msg = "Update data gagal";
}

$response = array(
    'status' => "OK",
    'msg' => $msg
);

    echo json_encode($response,JSON_PRETTY_PRINT);
?>