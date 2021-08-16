
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/kostum.css" />
  </head>

  <body>
    <!-- Navbar-->
    <?php
        include 'theme/navbar.php';
        ?>
    <!-- endnavbar -->

    <div class="container">
      <div class="row pt-5">
        <div class="col">
          <div class="card" style="width: 20rem">
            <div class="card-body">
              <h5 class="card-title judulCard">Kategori</h5>
              <h1 class="text-right">9</h1>
              <hr class="garisKategori" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 20rem">
            <div class="card-body">
              <h5 class="card-title judulCard">tempat/lokasi</h5>
              <h1 class="text-right">9</h1>
              <hr class="garisKategori" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 20rem">
            <div class="card-body">
              <h5 class="card-title judulCard">pengguna app</h5>
              <h1 class="text-right">9</h1>
              <hr class="garisKategori" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
