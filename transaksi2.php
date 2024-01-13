<?php
session_start();
include ('koneksi.php');
if(isset($_POST['nama'])){

    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $harga = $_POST['harga'];
    $alamat = $_POST['alamat'];


    $query =mysqli_query($conn, "INSERT INTO transaksi (nama,no_hp,harga,alamat) values('$nama','$no_hp','$harga','$alamat')");
    if($query) {
        echo '<script>alert("Order Berhasil ");
        location.href="../index.php"</script>';
    }else {
        echo '<script>alert("Register Gagal")</script>';
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="style1.css">

    <title>Form Pembelian</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Form Pemesanan</h3>
            <form class="mb-5" method="post">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nama </label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nomor HP</label>
                  <input type="text" class="form-control" name="no_hp" id="no_hp"  placeholder="Masukan Nomor HP">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Harga</label>
                  <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukan Harga">
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Alamat</label>
                  <textarea class="form-control" name="alamat" id="message" cols="30" rows="4"  placeholder="Masukan Alamat"></textarea>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="ORDER NOW" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>