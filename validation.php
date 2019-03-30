 <?php
 	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','','login_db');
	if (mysqli_connect_errno())
  	{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	$q="SELECT * FROM user where username='$username' && password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1){
		$_SESSION['username']=$username;
		header('location:http://localhost/Book Management/home.php');
	}
	else{
		header('location:http://localhost/Book Management/login.php');
	}

?>
