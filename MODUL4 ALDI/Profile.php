<?php
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: Login.php");
	exit;
}
require 'Functions.php';
$iduser = $_SESSION["id_user"];
$profil = query("SELECT * FROM user WHERE id = '$iduser'");
if( isset($_POST["submit"]) ) {
	if( updateprofil($_POST) > 0 ) {
	echo "<script> alert('berhasil update profil!'); 
	document.location.href = 'profil.php';
	</script>";
	
	} else {
		echo mysqli_error($conn);
	}
}
?>

<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<title>Registrasi</title>
<style>
h5{
text-align: left;font-family: courier;}
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light"style="background-color:#005ef5; font-family: courier;">
  <a class="navbar-brand" href="#"><b>WAD GAMES</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">  
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <li class="nav-item"><a class= "btn btn-warning" href="Login.php">Login</li></a>
	<li class="nav-item"><a class= "btn btn-warning" href="Register.php">Register</li></a>
    </form>
  </div>
</nav>
<body>
<div class="container shadow p-3 mb-5 bg-white rounded mt-5">
		
		<form class="form-group" action="" method="post">
			<h4 class="text-center">Register</h4>
			<hr>
			<div class="col-md-10 ml-4">
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="nama" placeholder="Masukin Nama" id="nama" required="1">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" placeholder="" id="email" required="1">
				<label for="nohp">No. Handphone</label>
				<input class="form-control" type="text" name="nohp" id="nohp" required="1">
				<label for="katasandi">Kata sandi</label>
				<input class="form-control" type="password" name="katasandi" id="katasandi" required="1">
				<label for="sandi">Konfirmasi Kata sandi</label>
				<input class="form-control" type="password" name="katasandi2" id="nama" required="1">
                <li>
        <label for="theme">Warna navbar :</label>
        <select name="theme" id="theme">
          <option value="light">Light</option>
          <option value="dark">Dark</option>
        </select>
      </li>
				<br>
			</div>
			<div class="col-md-10 text-center ml-4">
				<button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		<p class="text-center">Sudah Punya akun ? Login Disini! <a href="login.php">Login</p>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
	</html>