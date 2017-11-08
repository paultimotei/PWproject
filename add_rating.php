<?php
session_start();
include 'includes\dbh.inc.php';

$book_id = mysqli_real_escape_string($conn, $_POST['book_id']);
$rating = mysqli_real_escape_string($conn, $_POST['rating']);
$count = mysqli_real_escape_string($conn, $_POST['count']);
if(empty($book_id) || empty($comment))
{
	header("Location: header.php?add_rating=empty");
	exit();
}else{
	$sql = "INSERT INTO rating (book_id, rating, count) VALUES ('$book_id','$rating','$count')";
	$result = mysqli_query($conn, $sql);
	header("Location: carte.php?id=$book_id&add_rating=success");
	exit();
}
?>