<?php
session_start();
error_reporting(0);
if (isset($_SESSION["login"])){
	header("Location: Index.php");
	exit;
}

require 'functions.php';


if (isset ($_COOKIE['login']) && isset ($_COOKIE['key'])){
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];



	$res = mysqli_query($connect,'SELECT * FROM user WHERE id = $id');
	
	$data = mysqli_fetch_assoc($res);

	if ($key === hash('sha256', $data['username']) ){
		header("Location : Index.php");
	}
}


if( isset($_POST["login"])){

	$email = $_POST["email"];
	$katasandi = $_POST["password"];

	$verify= mysqli_query($connect,"SELECT * FROM user WHERE email = '$email'");


	if (mysqli_num_rows($verify) === 1){

	
		$data = mysqli_fetch_assoc($verify);
		if ( password_verify($katasandi, $data["password"])){

			$_SESSION["login"] = true;
			$_SESSION["nama"] = $data["nama"];
			$_SESSION["email"] = $data["email"];
			$_SESSION["nohp"] = $data["no_hp"];
		

			if (isset($_POST['check'])){
				
				setcookie('id',$data['id'], time()+120);
				setcookie('key',hash('sha256',$data['email']), time()+120);
			}
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
$nav = $_COOKIE['nav-color'];
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
	<?php if (isset($error)) :?>
		<div class="alert alert-danger" role="alert">
			Username / Password Salah!
		</div>
	<?php endif; ?>
	<div class="container shadow p-3 bg-white rounded mt-5">
		<form class="form-group" action="" method="post">

			<h4 class="text-center mt-3">Login</h4>
			<hr>
			<div class="col-md-10 ml-4">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
				<label for="password">Kata Sandi</label>
				<input type="password" name="password" placeholder="Kata sandi" id="password" class="form-control">

				<div class="form-group ml-4 mt-3">
					<input type="checkbox" class="form-check-input" id="check1" name="check">
					<label class="form-check-label" for="check1">Remember Me</label>
				</div>
			</div>
			<div class="col-md-10 text-center ml-4">
				<button type="submit" id="login" name="login" class="btn btn-primary">Login</button>
			</div>
			<p class="text-center">Belum Punya akun ? Daftar Disini! <a href="Register.php">Daftar</p>
			</form>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
	</html>