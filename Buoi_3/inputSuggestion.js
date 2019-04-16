function suggestion(str) {
  /* console.log(str); */
  if (str.length === 0) {
    document.getElementById("liveSearch").innerHTML = "";
    document.getElementById("liveSearch").style.border = "0px";
    return;
  }
  var xmlhttp;
  xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("liveSearch").innerHTML = xmlhttp.responseText;
      document.getElementById("liveSearch").style.border = "1px solid #A5ACB2";
    }
  };
  xmlhttp.open("GET", "liveSearch.php?search=" + str, true);
  xmlhttp.send();
}

function productDetail(idProc) {
  //console.log(idProc)
  var xmlhttp;
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("productDetail").innerHTML = xmlhttp.responseText;
    }
  };
  xmlhttp.open("GET", "viewProduct.php?idsp=" + idProc, true);
  xmlhttp.send();
}

function deleteProc(idProc) {
  //console.log(idProc);
  var ok = confirm("Are you sure to Delete?");
  if (ok) {
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        window.location = "listProducts.php";
      }
    };
    xmlhttp.open("GET", "handle_deleteProduct.php?idsp=" + idProc, true);
    xmlhttp.send();
  }
}
