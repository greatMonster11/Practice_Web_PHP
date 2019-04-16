<!DOCTYPE html>
<?php
include("config.php");
session_start();

if (isset($_SESSION['idUser'])) {
  $id = $_SESSION['idUser'];
  $idsp = $_GET['idsp'];


  $sql = "SELECT * FROM sanpham 
          WHERE idtv = $id and idsp = $idsp";

  //echo $sql;
  $result = $con->query($sql);

  if ($result) {
    $row = $result->fetch_assoc();
    echo "<strong>Ten san pham: </strong>" . $row['tensp'];
    echo "<br />";
    echo "<strong>Gia san pham: </strong>" . $row['giasp'];
    echo "<br />";
    echo "<strong>Chi tiet san pham: </strong>" . $row['chitietsp'];
    echo "<br />";
    echo "<img src=" . $row['hinhanhsp'] . " with='100px' height='100px' />";

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