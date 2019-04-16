<!DOCTYPE html>
<?php
include("config.php");
session_start();

if (isset($_SESSION['idUser'])) {
  $id = $_SESSION['idUser'];

  $sql = "SELECT * FROM sanpham WHERE idtv = $id";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>STT</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Giá sản phẩm</th>";
    echo "<th colspan='3'>Lựa chọn</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['idsp'] . "</a>";
      echo "<td>" . $row['tensp'] . "</a>";
      echo "<td>" . $row['giasp'] . "(VND)" . "</a>";
      echo "<td><button onclick='productDetail(" . $row['idsp'] . ")'>Xem chi tiết</button></td>";
      echo "<td><a href='editProc.php?idsp=" . $row['idsp'] . "'>Sửa</a></td>";
      echo "<td><button onclick='deleteProc(" . $row['idsp'] . ")'>Xóa</button></td>";
      echo "</tr>";
    }
    echo "</table>";
  }
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
  <title>List Product</title>
  <script src="inputSuggestion.js"></script>
</head>

<body>
  <input placeholder="Search..." type="text" size="30" onkeyup="suggestion(this.value)" />
  <div id="liveSearch"></div>
  <div id="productDetail"></div>
</body>

</html>