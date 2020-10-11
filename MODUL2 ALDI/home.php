<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./assets/styles/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <nav>
    <ul class="nav justify-content-center bg-primary">
      <li class="nav-item">
	      <a class="nav-link" href="home.php" style="color: #ff0080">Home</a>
      </li>
      <li class="nav-item">
	      <a class="nav-link" href="booking.php" style="color:#ff0080">Booking</a>
      </li>
    </ul>
  </nav>

  <div class="title  d-flex justify-content-center text-primary ">
    <div class="text-center">
      <h1>EAD Hotel</h1>
      <h3>Welcome To 5 Star Hotel</h3>
      <br\>
    </div>

  </div>
  </div>

  <section class="content">
    <div class="container">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="./gambar/hotel1.jpg" alt="Card image cap">
          <div class="card-body">

            <div class="d-flex justify-content-center room-title text-center">
              <div>
                <h3>Standard </h3>
                <h4 class="text-primary">$ 90/Day</h4>
              </div>
            </div>
            <table class="table mx-auto">
              <thead class="thead-light">
                <tr>
                  <th>Facilities</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1 Single Bed</td>
                </tr>
                <tr>
                  <td scope="row">1 Bathroom</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex justify-content-center">
            <a href="booking.php?room=<?php echo 'Standard&img=hotel1' ?>"><button type="button" class="btn btn-primary">Book Now</button></a>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="./gambar/hotel2.jpg" alt="Card image cap">
          <div class="card-body">
            <div class="d-flex justify-content-center room-title text-center">
              <div>
                <h3>Superior</h3>
                <h4 class="text-primary">$ 90/Day</h4>
              </div>
            </div>
            <table class="table mx-auto">
              <thead class="thead-light">
                <tr>
                  <th>Facilities</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1 Double Bed</td>
                </tr>
                <tr>
                  <td scope="row">1 Television and Wifi</td>
                </tr>
                <tr>
                  <td scope="row">1 Bathroom with Hot Water</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex justify-content-center">
          <a href="booking.php?room=<?php echo 'Superior&img=hotel2' ?>"><button type="button" class="btn btn-primary">Book Now</button></a>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="./gambar/hotel3.jpg" alt="Luxury">
          <div class="card-body">
            <div class="d-flex justify-content-center room-title">
              <div class="text-center">
                <h3>Luxury</h3>
                <h4 class="text-primary">$200/Day</h4>
              </div>
            </div>
            <table class="table mx-auto">
              <thead class="thead-light">
                <tr>
                  <th>Facilities</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">2 Double Bed</td>
                </tr>
                <tr>
                  <td scope="row">2 Bathroom with Hot Water</td>
                </tr>
                <tr>
                  <td scope="row">1 Kitchen</td>
                </tr>
                <tr>
                  <td scope="row">1 Workroom</td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex justify-content-center">
          <a href="booking.php?room=<?php echo 'Luxury&img=hotel3' ?>"><button type="button" class="btn btn-primary">Book Now</button></a>
          </div>
        </div>
      </div>
    </div>

    </div>

  </section>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>