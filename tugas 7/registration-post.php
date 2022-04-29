<?php
include("connection.php");

if(isset($_POST['registration'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    // enkripsi password
    $password = md5($_POST["pwd"]);
    $confirm_password = md5($_POST["confirm_pwd"]);

    $query = mysqli_query($conn, "INSERT into user (username,pwd) VALUES ('$username','$password')");
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    $num = mysqli_num_rows($result);
    if($password == $confirm_password){

        if($num>0){
        echo "<script>
        alert('Registrasi Sukses');
        window.location.href = 'login.php';</script>";
        }
    }else{
        echo "<script>
        alert('Registrasi Gagal, Cocokkan password.');
        window.location.href = 'registration.php';
        </script>";
    }
}

?>