function validateForm() {
  //alert("Function called");
  var username = document.forms["myForm"]["username"].value;
  var password = document.forms["myForm"]["password"].value;
  var confirmPassword = document.forms["myForm"]["confirmPassword"].value;
  var patterm = /^[A-Z][A-Za-z0-9]{5,14}$/;

  var hasError = false;

  if (username == null || username == "") {
    document.getElementById("myDiv").innerHTML = "Username can not be blank";
    document.forms["myForm"]["username"].setAttribute("class", "hasError");
    document.getElementById("myDiv").style.color = "Tomato";
    hasError = true;
  }

  if (!patterm.test(username)) {
    document.getElementById("myDiv").innerHTML =
      "Username must be 5 - 15 characters";
    document.forms["myForm"]["username"].setAttribute("class", "hasError");
    document.getElementById("myDiv").style.color = "Tomato";
    hasError = true;
  }

  if (password == null || password == "") {
    document.getElementById("failedPassword").innerHTML =
      "Password can not be blank";
    document.forms["myForm"]["password"].setAttribute("class", "hasError");
    document.getElementById("failedPassword").style.color = "Tomato";
    hasError = true;
  }

  if (password !== confirmPassword) {
    document.getElementById("failedPassword").innerHTML =
      "Password Confirm not match";
    document.forms["myForm"]["password"].setAttribute("class", "hasError");
    document.getElementById("failedPassword").style.color = "Tomato";
    hasError = true;
  }

  if (hasError) {
    return false;
  }
}
