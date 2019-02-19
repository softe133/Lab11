<?php


if($_POST["username"] == "Hafsa" && $_POST["password"] == "16SW152"){
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ (86400 * 7));
	setcookie ("password",$_POST["password"],time()+ (86400 * 7));
	echo "Cookies set Successfully<br>";
	echo "Welcome: ".$_COOKIE["username"]." With Rollno ".$_COOKIE["password"];

}else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}
 }
 else{
 	echo "Please Enter correct username and password";
 }
?>
 
<p><a href="page.php"> Go to Login Page </a> </p>