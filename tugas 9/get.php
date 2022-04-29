<?php

include ("connection.php");

$sql = "SELECT * FROM mhs";
$query = mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($query)){

    $items[] = array(
        'npm'=>$data["npm"],
        'nama'=>$data["nama"],
        'asal'=>$data["asal"],
        'jurusan'=>$data["jurusan"],
        'nilai_akhir'=>$data["nilai_akhir"]
    );
}

$response = array(
    'status'=>'OK',
    'data' => $items
);

echo json_encode($response,JSON_PRETTY_PRINT);

?>