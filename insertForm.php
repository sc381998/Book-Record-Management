<?php 
  session_start();
  if(!isset($_SESSION['username']))
    header('location:http://localhost/Book Management/login.php');
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Insertion Form</title>
    <link rel="stylesheet" href="./CSS/formStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h1><span>Book</span> Record Management</h1>
	<form action="insertion.php" method="post">
		<table>
			<tr>
				<th>Title</th>
				<td><input placeholder="Enter the book title" class="border" type="text" name="title" required/></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input placeholder="Enter the price" class="border" type="number" name="price" required/></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input placeholder="Enter the author name" class="border" type="text" name="author"/></td>
			</tr>
			<tr>
				<td><input class="submit" type="submit" value="Insert"/></td>
			</tr>
		</table>
</body>
</html>