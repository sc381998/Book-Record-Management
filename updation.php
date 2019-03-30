<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:http://localhost/Book Management/login.php');
	$size=sizeof($_POST);
	$records=$size/4;
	for($i=1;$i<=$records;$i++)
	{
		$index1="book_id".$i;
		$bookid[$i]=$_POST[$index1];
		$index2="title".$i;
		$title[$i]=$_POST[$index2];
		$index3="price".$i;
		$price[$i]=$_POST[$index3];
		$index4="author".$i;
		$author[$i]=$_POST[$index4];
	}
	$con=mysqli_connect('localhost','root','','BRM_DB');
	if (mysqli_connect_errno())
  	{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	for($i=1;$i<=$records;$i++){
	$q="UPDATE book SET title='$title[$i]',price=$price[$i], author='$author[$i]' where bookid=$bookid[$i]";
	mysqli_query($con,$q);
	}
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Updation</title>
	<link rel="stylesheet" href="./CSS/viewStyle.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h1><span>Book</span> Record Management</h1>
	<div>
		<p>
		<?php 
				echo $size. " Records Updated";
		?>
	</p>
	<p>Go back to home page</p>
	<a href="home.php"> Click Here</a>
   </div>
</body>
</html>