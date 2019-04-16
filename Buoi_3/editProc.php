<!DOCTYPE html>
<html>
<?php
include("config.php");
session_start();

if (isset($_SESSION['idUser'])) {
  $id = $_SESSION['idUser'];
  $idsp = $_GET['idsp'];
  $sql = "SELECT * FROM sanpham WHERE idtv = $id and idsp = $idsp";
  //echo $sql;
  $result = $con->query($sql);

  if ($result) {
    $row = $result->fetch_assoc();
    echo $row['hinhanhsp'];
  }
} else {
  header("Location: /Buoi_3/listProducts.php");
  exit();
}
?>

<head>
  <meta charset="UTF-8" />
  <title>Signup Form</title>
  <link rel="stylesheet" href="signup.css" />
</head>

<body>
  <div class="container">
    <div class="header">
      <h3>Thêm sản phẩm mới</h3>
      <p>Vui lòng điển đầy đủ thông tin bên dưới để thêm sản phẩm mới</p>
    </div>
    <div class="wrap">
      <div class="form-control">
        <form action="handle_editProduct.php?idsp=<?php echo $row['idsp'] ?>" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td>
                <label>Tên sản phẩm</label>
              </td>
              <td>
                <input type="text" name="productname" value="<?php echo $row['tensp'] ?>" />
                <div id="myDiv"></div>
              </td>
            </tr>
            <tr>
              <td>
                <label>Chi tiết sản phẩm</label>
              </td>
              <td>
                <textarea name="productDetail" cols="30" rows="10"><?php echo $row['chitietsp'] ?></textarea>
              </td>
            </tr>
            <tr>
              <td>
                <label>Giá sản phẩm</label>
              </td>
              <td>
                <input type="text" name="price" value="<?php echo $row['giasp'] ?>" /> (VND)
              </td>
            </tr>
            <tr>
              <td>
                <label>Hình đại diện</label>
              </td>
              <td>
                <input value="<?php echo $row['hinhanhsp'] ?>" type="file" name="avatar" />
                <img src="<?php echo $row['hinhanhsp'] ?>" width="100px" height="100px" />
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <button type="submit">Update</button>
                <button type="button">Làm lại</button>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <div class="get-back">
      <a href="index.html#top">Back to Homepage</a>
    </div>
  </div>
</body>

</html>