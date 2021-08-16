<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kostum.css">
</head>

<body>
   <!-- Navbar-->
   <?php
        include 'theme/navbar.php';
        ?>
    <!-- endnavbar -->

    
    <div class="container">
        <h2 class="pt-5">Pengaturan App</h2>
        <div class="row pt-4 ml-1">

            <form style="width: 40rem;">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Host Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Aplikasi</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Logo Aplikasi</label>
                    <input type="file" class="form-control-file pb-2" id="exampleFormControlFile1">
                    <img src="img/logo(1).png" width="75" height="75">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Versi Aplikasi</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Website</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Developed By</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example">
                </div>
                <div class="row justify-content-end mr-1 pb-5">
                    <button type="button" class="btn btn-success">Simpan Data</button>
                </div>

            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>