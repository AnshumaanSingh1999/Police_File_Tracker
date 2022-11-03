function myFunction() {
  var y = document.getElementById("signin");
  var x = document.getElementById("signup");

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";

  } else {
    x.style.display = "none";
    y.style.display = "block";

  }
}
function myFunction2() {
location.replace("logout.php")
}
function myFunction3() {
location.replace("update.php")
}
function myFunction4() {
location.replace("delete.php")
}
function myFunction5() {
location.replace("home.php")
}