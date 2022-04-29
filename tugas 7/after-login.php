<?php 
include ("authtentication.php"); 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='after-login.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hai</title>
</head>
<body>
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center"> <img src="Assets/user.jpg" width="100" class="rounded-circle"> </div>
                    <h5 class="mt-2 mb-0" style='text-align:center;'>Selamat Datang <?php echo $_SESSION["username"]["username"] ?></h5><span style='text-align:center;'>Pengguna</span>
                    <div class="px-4 mt-1">
                        <p class="fonts">Ini adalah menu dashboard yang hanya bisa di akses apabila sudah melakukan login,menggunakan Session.</p>
                    </div>
                    <div class="buttons">
                        <a href='logout.php'><button class="btn btn-outline-primary px-4" value='logout' name='logout'>Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>