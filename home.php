<?php 
  session_start();
  if(!isset($_SESSION['username']))
    header('location:http://localhost/Book Management/login.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="./CSS/homeStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<h1><span>Book</span> Record Management
		<img class="symbol" src="./CSS/symbol.jpg"></h1>
	<a href="logout.php"><h4>log out</h4></a>
	<img class="pic"  src="./CSS/books.jpg"/>
	<p> This is the official website for the Book Record Management of Siliguri College. This website is a online database of collection of sources of information and similar resources, made accessible to a defined community for reference or borrowing. It provides digital access to material.  In addition to storing content, here you can provide means for organizing, searching, and retrieving the books contained in the collection.</p>
	<div class="border">
	<a href="insertForm.php"><i class="fa fa-spinner fa-spin"></i>INSERT BOOK</a><br/><br/>
	<a href="view.php"><i class="fa fa-spinner fa-spin"></i>VIEW BOOK RECORDS</a><br/><br/>
	<a href="deleteForm.php"><i class="fa fa-spinner fa-spin"></i>DELETE BOOK RECORDS</a><br/><br/>
	<a href="updateForm.php"><i class="fa fa-spinner fa-spin"></i>UPDATE BOOK RECORDS</a><br/>
</div>
<div class="footer">
		Contact us . View . Copyright . Terms & Condition . Data since 2017
	</div>
</body>
</html>