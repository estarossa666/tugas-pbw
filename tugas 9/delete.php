<?php

include('connection.php');

$sql = "DELETE FROM mhs WHERE npm ='".$_GET["npm"]."'";

$query = mysqli_query($conn, $sql);

if($query){
    $msg = "Hapus data berhasil";
}
else{
    $msg = "Hapus data gagal";
}

$response = array(
    'status' => "OK",
    'msg' => $msg
);

echo json_encode($response,JSON_PRETTY_PRINT);

?>