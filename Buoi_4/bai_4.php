<!DOCTYPE html>
<?php
session_start();
include("../Buoi_3/config.php");
?>
<html>

<head>
	<title> Lập trình web (CT428) </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



</head>

<body>
	<div id="wrap">
		<div id="title">
			<h1>Bài 4 - Buổi 4</h1>
		</div>
		<!--end div title-->
		<div id="menu">
			<!-- chèn menu của sinh viên vào-->
		</div>
		<!--end div menu-->
		<div id="content">
			<!--Nội dung trang web-->
			<h1>Slide show</h1>

			<form name="form">
				<img id="laptopImg" src="" height="300" width="300" />
				<br />
				<input type="button" name="previous" value="Previous" onclick="changeSlide(-1)">
				<input type="button" name="next" value="Next" onclick="changeSlide(1)">
				<br />
				<select name="laptopSel" onchange="chooseSlide(value) ">

				</select>
			</form>

			<div id="footer">
				<p>Họ tên SV: Nguyễn Phước Thành <br /> Email: thanhb1610669@student.ctu.edu.vn</p>
			</div>
			<!--end div footer-->
		</div>
		<!--end div wrap-->

</body>
<script>
	var IMAGE_PATHS = [];
	var IMAGE_NAMES = [];
	var s = 0;
	<?php
	if (isset($_SESSION['idUser'])) {
		$id = $_SESSION['idUser'];

		$sql = "SELECT * FROM sanpham WHERE idtv = $id";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {

			while ($row = $result->fetch_assoc()) {
				?>
				IMAGE_NAMES.push('<?php echo $row['tensp']; ?>')
				IMAGE_PATHS.push('<?php echo $row['hinhanhsp']; ?>')
			<?php

		}
	}
} else {
	header("Location: /Buoi_3/login.html");
	exit();
}

?>;
	console.log(s)
	console.log(IMAGE_NAMES)

	document.getElementById("laptopImg").src = '../Buoi_3'.concat(IMAGE_PATHS[0].slice(1, IMAGE_PATHS[0].length))
	var select = document.forms["form"]["laptopSel"]
	for (i in IMAGE_NAMES) {
		select.options[select.options.length] = new Option(IMAGE_NAMES[i], i)
	}
	var slideIndex = 0;
	plusSlides(slideIndex);

	function changeSlide(n) {
		plusSlides(slideIndex += n);
	}


	function plusSlides(pos) {

		if (pos === IMAGE_NAMES.length + 1) {
			pos = 0
			slideIndex = 0
		}

		if (pos === -1) {
			pos = IMAGE_NAMES.length
			slideIndex = IMAGE_NAMES.length
		}
		console.log(pos)
		var path = "./../Buoi_3"
		document.getElementById("laptopImg").src = path.concat(IMAGE_PATHS[pos].slice(1, IMAGE_PATHS[pos].length))
		//console.log('./../Buoi_3' + IMAGE_PATHS[pos].slice(1, IMAGE_PATHS[pos].length))
		chooseSlide(pos)
	}

	function chooseSlide(pos) {

		document.getElementById("laptopImg").src = "./../Buoi_3".concat(IMAGE_PATHS[pos].slice(1, IMAGE_PATHS[pos].length))
		document.forms["form"]["laptopSel"].value = IMAGE_NAMES[pos]
	}

	//-->
</script>

</html>