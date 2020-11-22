<?php
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: Login.php");
	exit;
}
require 'Functions.php';
$iduser = $_SESSION["id_user"];
$mycart = query("SELECT * FROM cart WHERE user_id = '$iduser'");
$total = query("SELECT SUM(harga) total FROM cart where user_id = '$iduser'");
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
  </div>
</nav>
<h1>Keranjang Saya</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
    <?php $i = 1;
    foreach( $mycart as $row ) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $row["nama_barang"]; ?></td>
      <td><?= $row["harga"]; ?></td>
      <td><a href="hapusbarang.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
    </tr>
    <?php $i++; endforeach; ?>
    <tr>
      <td colspan=2>Total</td>
      <td colspan=2><?= $total["0"]["total"]; ?></td>
    </tr>
  </table>
</body>
</html>