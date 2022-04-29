<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <title>Daftar</title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <a href='login.php'><h2 class="inactive underlineHover">LOGIN</h2></a>
    <h2 class="active">DAFTAR</h2>
    
    <!-- Login Form -->
    <form action='registration-post.php' method='POST'>
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="pwd" placeholder="Password">
      <input type="text" id="password" class="fadeIn third" name="confirm_pwd" placeholder="Confirm Password">
      <input type="submit" class="fadeIn fourth" value="Registration" name='registration'>
    </form>

  </div>
</div>
    
</body>
</html>