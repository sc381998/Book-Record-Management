<?php
    session_start();
    if(!isset($_SESSION['username']))
    header('location:http://localhost/Book Management/login.php');
    $con=mysqli_connect('localhost','root','','BRM_DB');
	$title=$_POST['title'];
	$price=$_POST['price'];
	$author=$_POST['author'];

	$q="INSERT INTO book (title,price,author) values ('$title',$price,'$author')";
	mysqli_query($con,$q);
	mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
	<link rel="stylesheet" href="./CSS/viewStyle.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h1><span>Book</span> Record Management</h1>
	<div><p>
		<?php 
				echo "Inserted Successfully";
		?>
	</p>
	<p>Do you want to insert more record?</p>
	<a href="insertForm.php">Insert More</a>
	<a href="home.php">Home Page</a>
</div>
</body>
</html>