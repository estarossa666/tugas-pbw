<?php 

include('connection.php');

if(isset($_POST['login'])){
    
    $username = $_POST["username"];
    $password = md5($_POST["pwd"]);

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND pwd='$password'");
    $num = mysqli_num_rows($result);

    if($num == 1){

        $user = mysqli_fetch_array($result);
        session_start();
        $_SESSION["username"] = $user;
        header("Location: after-login.php");

    }
    else{
        echo "<script>
        alert('Username atau Password Salah!');
        window.location.href = 'login.php';
        </script>";
    }
    }
    ?>
</body>
</html>