<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('config.php');
?>
    <link rel="stylesheet" href="regis.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
<div class= "form">
<div id="isi">
<div id="title">
<h2>R E G I S T E R </h2>
<div class = "garis"></div>
</div>
<form method="post" class="bibi">
<label for="user-name" style="padding-top:13px"><h3>Nama</h3></label>
  <input
   id="user-name"
   class="nama"
   type="Nama"
   name="Nama"
   placeholder="type here"
   required/>
<label for="user-email" style="padding-top:13px"><h4>Email</h4></label>
  <input
   id="user-email"
   class="email"
   type="Email"
   name="Email"
   placeholder="example123@gmail.com"
   autocomplete="on"
   required/>
<label for="user-username" style="padding-top:13px"><h5>Username</h5></label>
  <input
   id="user-username"
   class="usr"
   type="Username"
   name="Username"
   placeholder="type here "
   autocomplete="on"
   required/>
  <div class="border"></div>
  <label for="user-password" style="padding-top:22px"><h6>Password</h6></label>
  <input
   id="user-password"
   class="psr"
   type="password"
   name="password"
   placeholder="*****"
   required/>
  <div class="border"></div>
  <input id="tmbl" type="submit" name="submit" value="REGISTER">
</form>

</div>
    
</body>
</html>
<form action="" method="POST">
...
</form>

