<?php
session_start();
include 'includes\dbh.inc.php';

$book_id = mysqli_real_escape_string($conn, $_POST['book_id']);
$username = mysqli_real_escape_string($conn, $_SESSION['u_username']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

if(empty($book_id) || empty($username) || empty($comment))
{
	header("Location: header.php?add_comment=empty");
	exit();
}else{
	$sql = "INSERT INTO comments (book_id, name, comment) VALUES ('$book_id','$username','$comment')";
	$result = mysqli_query($conn, $sql);
	header("Location: carte.php?id=$book_id&add_comment=success");
	exit();
}
?>