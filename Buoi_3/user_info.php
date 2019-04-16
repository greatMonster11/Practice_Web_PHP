<!DOCTYPE html>
<?php
include("config.php");
session_start();

if (isset($_SESSION['idUser'])) {
  $id = $_SESSION['idUser'];
  $sql = "SELECT * FROM thanhvien WHERE id = $id";
  $result = $con->query($sql);

  $row = $result->fetch_assoc();
} else {
  header("Location: /Buoi_3/login.html");
  exit();
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Info</title>
</head>

<body>
  <p>Hello user: <?php echo $row['tendangnhap'] ?></p>
  <img src="<?php echo $row['hinhanh'] ?>" />
  <p>Giới tính: <?php echo $row['gioitinh'] ?></p>
  <p>Nghề Nghiệp: <?php echo $row['nghenghiep'] ?></p>
  <p>Sở thích: <?php echo $row['sothich'] ?></p>

  <?php $con->close(); ?>
  <h2><a href="logout.php">Sign Out</a></h2>
  <a href="addProduct.php"><button>Add product</button></a>
  <a href="listProducts.php"><button>View product</button></a>
</body>

</html>