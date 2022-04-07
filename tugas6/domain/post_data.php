<?php

// panggil koneksi.php`````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````````
include('data/connection_remote_database.php');

if (isset($_POST['submit'])) {

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];   
    $kodemk = $_POST['kodemk'];
    $jumlah_sks = $_POST['jumlah_sks'];

    $query = mysqli_query($connection, "INSERT into mahasiswa (npm,nama,alamat,jurusan) VALUES ('$npm','$nama','$alamat','$jurusan')");

    echo 'berhasil';
}
