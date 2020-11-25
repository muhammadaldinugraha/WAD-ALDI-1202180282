<?php
session_start();
if (!isset($_SESSION["login"])){
	header("Location: Login.php");
	exit;
}
require 'Functions.php'
?>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<title>MODUL4 WAD</title>
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
    <li class="nav-item"><a class= "btn btn-danger" href="Logout.php">Logout</li></a>
    </form>
  </div>
</nav>
<body>
  <h1>Data Game</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Details</th>
      <th>Price</th>
      <th>Action</th>
    </tr>
    <tr>
      <td><img src="image/cod.jpg" width="150"></td>
      <td>Call Of Duty</td>
      <td>Call of Duty adalah sebuah nama yang unik di industri game. Tidak ada lagi nama game di industri game yang di setiap kali pengumuman seri terbarunya selalu diikuti dengan diskusi dan debat intens yang biasanya terjadi antara dua kubu: mereka yang sudah muak dengan rilis tahunan yang ia lakukan dan mereka yang masih secara konsisten menikmati setiap seri yang muncul.</td>
      <td>Rp 700.000</td>
      <form action="" method="post">
      <input type="hidden" name="kode" value="1">
      <td><button type="submit" name="addcart"><a href="Cart.php">Add To Cart</button></td>
      </form>
    </tr>
    <tr>
      <td><img src="image/destiny.jpg" width="150"></td>
      <td>Destiny</td>
      <td>Destiny adalah game multiplayer shooter yang pertama kali dirilis untuk PlayStation 4 pada tahun 2014 lalu. Sempat mendapat ekspektasi tinggi, sayangnya Destiny tidak memenuhi kepuasan gamer dan berujung pada menurunnya popularitas secara drastis. Bungie yang berperan sebagai sang developer sendiri sebenarnya sudah mengeksekusi Destiny sebagai game yang solid. Hanya saja, karena Destiny hanya memfokuskan elemen gameplay dengan basis Online Shooter dan pengalaman bermain yang terasa sangat repetitif, banyak gamer mulai melupakan Destiny.</td>
      <td>Rp 600.000</td>
      <form action="" method="post">
      <input type="hidden" name="kode" value="2">
      <td><button type="submit" name="addcart"><a href="Cart.php">Add To Cart</button></td>
      </form>
    </tr>
    <tr>
      <td><img src="image/lastguardian.jpg" width="150"></td>
      <td>The Last Guardian</td>
      <td>The Last Guardian mungkin bukan game yang didesain untuk memenuhi hasrat dan daya tarik game-game mainstream saat ini, namun seperti halnya Shadow of Colossus, ia menawarkan sebuah pengalaman yang belum pernah ada sebelumnya. Sebuah usaha untuk membangun kedekatan emosional antara Anda, seorang anak kecil tanpa nama dengan seekor binatang raksasa bernama Trico. Kerennya lagi? Mereka melakukannya dengan begitu fantastis.</td>
      <td>Rp 900.000</td>
      <form action="" method="post">
      <input type="hidden" name="kode" value="3">
      <td><button type="submit" name="addcart"><a href="Cart.php">Add To Cart</button></td>
      </form>
    </tr>
    </tr>
  </table>
</body>
</html>