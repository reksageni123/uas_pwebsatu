<?php
session_start();
include 'koneksi.php';
if(isset($_POST['username'])){
    $usernsme = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM login where username='$usernsme' and password='$password'");

    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_array($query);
        $_SESSION['login'] = $data;
        echo '<script> alert("Selamat datang di Vit Store!!! '.$data['nama'].'");
        location.href="index.php"</script>';
    } else {
        echo '<script>alert("Username dan Password tidak sesuai, silahkan login kembali.");</script>';
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Login Page</title>
</head>
    
<body>
    <div class="input">
        <h1>LOGIN</h1>
    <form action="login.php" method="POST">
        <div class="box-input">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" placeholder="username">
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <a href="index.php">
        <button type="submit" name="login" class="btn-input">Login</button>
        </a>
    </form>
        <div class="bottom">
            <p>Belum punya akun?
                <a href="register.php">Register disini</a>
            </p>
        </div>
    </div>
</body>
</html>

