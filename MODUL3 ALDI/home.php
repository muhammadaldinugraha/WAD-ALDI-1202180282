<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: steelblue;">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">EAD EVENTS</a>
          </li>
        </ul>
        <ul class="navbar-nav" style="margin-left: 1065px;">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a href="buatEvent.php"><button class="btn btn-primary" type="submit">Buat Event</button></a>  
            </li>
        </ul>
    </nav>
    <h5 style="margin-top: 30px; text-align: center;color: blue;">WELCOME TO EAD EVENTS!</h5>
    <?php
        include ('config.php');
        $query = "SELECT * FROM event";
        $dewan1 = $conn->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        if ($res1->num_rows > 0) {
        while ($row = $res1->fetch_assoc()) {
            $name = $row["name"];
            $desk = $row["deskripsi"];
            $kategori = $row["kategori"];
            $tgl = $row["tanggal"];
            $mulai = $row["mulai"];
            $akhir = $row["berakhir"];
            $tempat = $row["tempat"];
            $harga = $row["harga"];
            $benefit = $row["benefit"];   
    ?>
    <div class = "col-sm-3 mb-3" style = "float: left; margin-top : 50px; margin-left :30px">
        <div class="card">
            <div class="card-header">
                Gambar
            </div>
            <div class="card-body">
            <h5 class="card-title"><?php echo $name; ?></h5>
                <p class="card-text"> tanggal  :  <?php echo $tgl; ?></p>
                <p class="card-text"> tempat   :  <?php echo $tempat; ?></p>
                <p class="card-text"> kategori :  <?php echo $kategori; ?></p>
                <a href="detailEvent.php?name=['name']" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <?php
      } 
      } else {
      echo "No Events Found";
      }
      $conn->close();
    ?>
</body>
</html>