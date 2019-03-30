<?php
  session_start();
  if(!isset($_SESSION['username']))
   header('location:http://localhost/Book Management/login.php');
	$size=sizeof($_POST);
	$j=1;
	for($i=1;$i<=$size;$i++,$j++)
	{
		$index="del".$j;
		if(isset($_POST[$index]))
			$b_id[$i]=$_POST[$index];
		else
			$i--;

	}
	$con=mysqli_connect('localhost','root','','BRM_DB');
	if (mysqli_connect_errno())
  	{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	for($k=1;$k<=$size;$k++){
	$q="DELETE FROM book where book_id=".$b_id[$k];
	mysqli_query($con,$q);
	}
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deletion</title>
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
				echo $size." Records Deleted";
		?>
	</p>
	<p>Go back to home page</p>
	<a href="home.php"> Click Here</a>
</div>
</body>
</html>