<!DOCTYPE html>
  <?php 
    include("config.php");
    session_start();

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "SELECT id FROM thanhvien WHERE tendangnhap = '$username' and matkhau = '$password'";
    // echo $sql;
    $result = $con->query($sql);
    echo $result->num_rows;
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $_SESSION['idUser'] = $row['id'];
      header("Location: /Buoi_3/user_info.php");
      $con->close();
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
  <title>Handle Login</title>
</head>
<body>
</body>
</html>