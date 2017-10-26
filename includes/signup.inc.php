<?php

if(isset($_POST['submit'])){

include_once 'dbh.inc.php';
$username = mysqli_real_escape_string($conn,$_POST['username']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
$repwd = mysqli_real_escape_string($conn,$_POST['repwd']);
$gendre = mysqli_real_escape_string($conn,$_POST['gendre']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$day = mysqli_real_escape_string($conn,$_POST['day']);
$mounth = mysqli_real_escape_string($conn,$_POST['']);
$year = mysqli_real_escape_string($conn,$_POST['year']);
$city = mysqli_real_escape_string($conn,$_POST['city']);
$address = mysqli_real_escape_string($conn,$_POST['address']);

//if($pwd!=$repwd)
//{
//	header("Location: ../CreareCont.php");
//	exit();
//}
if(empty($username) || empty($pwd) || empty($repwd) || empty($gendre) || empty($email) || empty($day) || empty($mounth) || empty($year) || empty($city) || empty($address))
{
	header("Location: ../CreareCont.php?CreareCont=empty");
	exit();
}else{
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	header("Location: ../CreareCont.php?CreareCont=email");
	exit();
}
else
{
	$sql = "SELECT * FROM users WHERE user_username='$username'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0)
	{
		header("Location: ../CreareCont.php?CreareCont=usertaken");
		exit();
	}
	else
	{
		$hashedPwd= password_hash($pwd,PASSWORD_DEFAULT);
		$hashedRepwd= password_hash($repwd,PASSWORD_DEFAULT);
		$sql = "INSERT INTO users (user_username, user_pwd, user_repwd, user_gendre, user_email, user_day, user_mounth, user_year, user_city, user_address) VALUES ('$username','$hashedPwd','$hashedRepwd','$gendre','$email','$day','$mounth','$year','$city','$address');";
		mysqli_query($conn, $sql);
		header("Location: ../CreareCont.php?CreareCont=success");
		exit();
	}

}


}


}else{
header("Location: ../CreareCont.php");
exit();
}