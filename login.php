<?php
require '../config.php';
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE email = '$email' AND password = '$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<center><h1>Login Succes!</h1></center>";
    //header("Location: ../Home");
} else {
    echo "<center><h1>Email atau Password Salah. Silahkan Coba Login Kembali.</h1> <button><strong><a href='../Login'>Login</a></strong></button></center>";
}