<?php 
include "connect.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $adress= $_POST['adress'];
    $city= $_POST['city'];
    $country= $_POST['country'];

    $sql = "INSERT INTO enertri
    (name, email, phone, adess, city, country) VALUES ('$name', '$email', '$phone', '$adess', '$city', '$country')";
    mysqli_query($conn, $sql); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        name: <input type="text"
        name="name"><br>
        email: <input type="email"
        name="email"><br>
        phone: <input type="text"
        name="phone"><br>
        adress: <input type="text"
        name="adress"><br>
        city: <input type="text"
        name="city"><br>
        country: <input type="text"
        name="country"><br>
        <input type="submit"
        name="submit" value="dobavi">
    </form>
</body>
</html>