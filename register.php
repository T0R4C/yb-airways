<?php
require 'config.php';

$nama = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (id, name, password, email, role) VALUES ('','$nama', '$pass', '$email', 'user')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Login");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>