<!DOCTYPE html>
<?php
include("config.php");
session_start();

if (isset($_SESSION['idUser'])) {
  $id = $_SESSION['idUser'];
  $productname =  $_POST["productname"];
  $productDetail =  $_POST["productDetail"];
  $avatar = "./images/" . $_FILES['avatar']['name'];
  $price = $_POST["price"];

  move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);

  $sql = "INSERT INTO sanpham (tensp,	chitietsp, giasp, hinhanhsp, idtv) VALUES
        ('$productname', '$productDetail', '$price', '$avatar', '$id')";

  echo $sql;
  $result = $con->query($sql);

  if ($result) {
    header("Location: /Buoi_3/listProducts.php");
    exit();
  }
} else {
  header("Location: /Buoi_3/login.html");
  exit();
}

$con->close();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Handle Signup</title>
</head>

<body>
</body>

</html>