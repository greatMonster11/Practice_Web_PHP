<!DOCTYPE html>
<html>
<?php
include("config.php");
session_start();

if (!isset($_SESSION['idUser'])) {
  header("Location: /Buoi_3/login.html");
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
        <form action="handle_addProduct.php" method="post" enctype="multipart/form-data">
          <table>
            <tr>
              <td>
                <label>Tên sản phẩm</label>
              </td>
              <td>
                <input type="text" name="productname" />
                <div id="myDiv"></div>
              </td>
            </tr>
            <tr>
              <td>
                <label>Chi tiết sản phẩm</label>
              </td>
              <td>
                <textarea name="productDetail" cols="30" rows="10"></textarea>
              </td>
            </tr>
            <tr>
              <td>
                <label>Giá sản phẩm</label>
              </td>
              <td>
                <input type="text" name="price" /> (VND)
              </td>
            </tr>
            <tr>
              <td>
                <label>Hình đại diện</label>
              </td>
              <td>
                <input type="file" name="avatar" />
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <button type="submit">Lưu sản phẩm</button>
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