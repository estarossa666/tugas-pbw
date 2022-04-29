<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <title>Login</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> LOGIN </h2>
    <h2 class="inactive underlineHover"><a href='registration.php' style='color:black;font-weight:bold;'>DAFTAR</h2></a>
    
    <!-- Login Form -->
    <form action='login-post.php' method='POST'>
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="pwd" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Login" name='login'>
    </form>

  </div>
</div>
    
</body>
</html>