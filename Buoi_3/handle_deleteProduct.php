<!DOCTYPE html>
<?php
include("config.php");
session_start();

if (isset($_SESSION['idUser'])) {
  $id = $_SESSION['idUser'];
  $idsp = $_GET['idsp'];


  $sql = "DELETE FROM sanpham 
          WHERE idtv = $id and idsp = $idsp";

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
  <title>Handle Delete</title>
</head>

<body>
</body>

</html>