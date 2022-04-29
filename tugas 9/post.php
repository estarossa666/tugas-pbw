<?php

include("connection.php");

$npm = isset( $_POST["npm"]) ? $_POST["npm"] : "";
$nama = isset( $_POST["nama"]) ? $_POST["nama"] : "";
$asal = isset( $_POST["asal"]) ? $_POST["asal"] : "";
$jurusan = isset( $_POST["jurusan"]) ? $_POST["jurusan"] : "";
$nilai_akhir = isset( $_POST["nilai_akhir"]) ? $_POST["nilai_akhir"] : "";

$sql = "INSERT INTO mhs (npm,nama,asal,jurusan,nilai_akhir) VALUES ('".$npm."','".$nama."','".$asal."','".$jurusan."','".$nilai_akhir."');";

$query = mysqli_query($conn,$sql);

if($query){
    $msg = "Data Mahasiswa Berhasil di Input";
}else{
    $msg = "Data Mahasiswa Gagal di Input";
}

$respone = array(
    'status' => "OK",
    'msg' => $msg
);

echo json_encode($respone,JSON_PRETTY_PRINT);
?>