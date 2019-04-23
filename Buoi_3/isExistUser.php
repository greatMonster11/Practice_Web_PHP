<!DOCTYPE html>
<?php
include("config.php");
session_start();

$username = $_GET["username"];
$sql = "SELECT tendangnhap FROM thanhvien WHERE tendangnhap = '$username'";

$result = $con->query($sql);
//echo $result->num_rows;
if ($result->num_rows === 1) {
  echo "* Username has been taken";
} else {
  echo "OK";
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Check User Existed</title>
</head>

<body>

</body>

</html>