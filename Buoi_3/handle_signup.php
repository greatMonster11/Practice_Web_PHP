<!DOCTYPE html>
<?php
include("config.php");

$username =  $_POST["username"];
$password =  md5($_POST["password"]);
$avatar = "./images/" . $_FILES['avatar']['name'];
$gender = $_POST["gender"];
$job = $_POST["job"];
$hobby = implode(",", $_POST["hobby"]);

move_uploaded_file($_FILES['avatar']['tmp_name'], $avatar);

$sql = "INSERT INTO thanhvien (tendangnhap,	matkhau, hinhanh, gioitinh, nghenghiep, sothich) VALUES
      ('$username', '$password', '$avatar', '$gender', '$job', '$hobby')";

echo $sql;
$result = $con->query($sql);

if ($result) {
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