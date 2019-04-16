function isExisted(str) {
  /* console.log(str); */
  if (str.length > 0) {
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
        document.getElementById("myDiv").style.color = "#f4427a";
      }
    };
    xmlhttp.open("GET", "isExistUser.php?username=" + str, true);
    xmlhttp.send();
  }
}
