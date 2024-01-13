<?php
session_start();
include 'koneksi.php';
if (isset($_POST['register'])) {
    $username = $_POST['Username']; // Change here
    $password = $_POST['Password']; // Change here

    $query = mysqli_query($conn, "INSERT INTO login (username, password) VALUES ('$username', '$password')"); // Update column names

    if($query) {
        echo '<script>alert("Register Berhasil. Silahkan Login kembali."); location.href="login.php"</script>';
    } else {
        echo '<script>alert("Register Gagal.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Register Page</title>
</head>
    
<body>
    <div class="input">
        <h1>REGISTER</h1>
        <form action="register.php" method="POST">
            <div class="box-input">
                <i class="fas fa-address-book"></i>
                <input type="text" name="Username" placeholder="Username" required value="">
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="Password" placeholder="Password" required value="">
            </div>
            <button type="submit" name="register" class="btn-input">Register</button>
            <a href="login.php"></a>
            <div class="bottom">
                <p>Sudah punya akun?
                    <a href="login.php">Login disini</a>
            </p>
            </div>
        </form>
    </div>
</body>

</html>

