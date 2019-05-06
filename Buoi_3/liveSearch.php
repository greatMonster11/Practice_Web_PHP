<!DOCTYPE html>
<?php
include("config.php");
session_start();

$id = $_SESSION['idUser'];
$search = $_GET["search"];
$sql = "SELECT tensp FROM sanpham WHERE tensp like '%$search%' and idtv = '$id'";

$result = $con->query($sql);
//echo $result->num_rows;
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<a>" . $row['tensp'] . "</a>";
    echo "<br />";
  }
} else {
  echo "Nothing matched yet !!";
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Live Search</title>
</head>

<body>

</body>

</html>