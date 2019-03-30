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
	<title>View Book Record</title>
	<link rel="stylesheet" href="./CSS/formStyle.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<h1><span>Book</span> Record Management</h1>
	<table id="view_table">
		<tr class="nav">
			<th class="active">Book Id</th>
			<th>Title</th>
			<th>Price</th>
			<th>Author</th>
		</tr>
		<?php
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
			?>
			<tr class="length">
				<td><?php echo $row['book_id']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['author']; ?></td>
			</tr>
			<?php
			}
		?>
	</table>
</body>
</html>