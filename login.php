 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Login Form</title>
 	<link rel="stylesheet" type="text/css" href="./CSS/loginStyle.css">
 </head>
 <body>
 	<h1><span>Book</span> Record Management</h1>
 	<h2>Login Window</h2>
 	<form action="validation.php" method="post">
 		<table>
 			<tr>
 				<td>Username</td>
 				<td><input class="black" type="text" name="username" placeholder="Enter your username....." required="username">
 			</tr>
 			<tr>
 				<td>Password</td>
 				<td><input class="black" type="password" name="password" placeholder="Enter your password....." required="password">
 			</tr>
 			<tr>
 				<td></td>
 				<td><input class="submit" type="submit" value="Login"></td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>