<!DOCTYPE html>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" a href="loginPageStyles.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>

<body>

	<div class="container">
	<img src="/my/PHP/src/User Avatar.png"/>
		<form action="authenticationPage.php" method="POST">
            
			<input type="email" name="email" placeholder="Enter the User Name"/>	

			<input type="password" name="password" placeholder="password"/>

			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>

		</form>
	</div>
</body>
</html>