<?php
session_start();
if(isset($_POST['submit'])){

include 'dbh.inc.php';
$username = mysqli_real_escape_string($conn,$_POST['username']);
$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

if(empty($username) || empty($pwd)){
	header("Location: ../Login.php?login=empty");
	exit();
}
else{
	$sql = "SELECT * FROM users WHERE user_username='$username'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck < 0){
	header("Location: ../Login.php?login=resultmic1");
	exit();
	}else{
		if($row=mysqli_fetch_assoc($result)){
		$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
		if($hashedPwdCheck == false){
			header("Location: ../Login.php?login=falsepassword");
			exit();
			}else
			{if($hashedPwdCheck == true){
			$_SESSION['u_id'] = $row['user_id'];
			$_SESSION['u_username'] = $row['user_username'];
			$_SESSION['u_gendre'] = $row['user_gendre'];
			$_SESSION['u_email'] = $row['user_email'];
			$_SESSION['u_day'] = $row['user_day'];
			$_SESSION['u_mounth'] = $row['user_mounth'];
			$_SESSION['u_year'] = $row['user_year'];
			$_SESSION['u_city'] = $row['user_city'];
			$_SESSION['u_address'] = $row['user_address'];
			header("Location: ../pag.php");
			exit();
			}
			
		
		}}
	}
}


}else{
	header("Location: ../Login.php?login=nuesubmit");
	exit();
}