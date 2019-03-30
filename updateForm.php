<?php
  session_start();
  if(!isset($_SESSION['username']))
  header('location:http://localhost/Book Management/login.php');
	$con=mysqli_connect('localhost','root','','BRM_DB');
	if (mysqli_connect_errno())
  	{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$q="SELECT * FROM book";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update  Book Record</title>
	<link rel="stylesheet" href="./CSS/formStyle.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h1><span>Book</span> Record Management</h1>
	<form action="updation.php" method="post">
	<table id="view_table">
		<tr>
			<th>Book Id</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
			?>
			<tr>
				<td><?php echo $row['book_id']; ?><input type="hidden" name="book_id<?php echo $i?>" value="<?php echo $row['book_id']; ?>"/></td>
				<td><input type="text" name="title<?php echo $i?>" value="<?php echo $row['title']; ?>"/></td>
				<td><input type="number" name="price<?php echo $i?>" value="<?php echo $row['price']; ?>"/></td>
				<td><input type="text" name="author<?php echo $i?>" value="<?php echo $row['author']; ?>"/></td>
				</tr>
				
			<?php
			}
		?>
	</table>
	<input class="submit" type="submit" value="Update"/>
</form>
</body>
</html>