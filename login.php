<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="login-form">
		<div class="row">
			<div class="col-md-6 login">
				<h2>Log In</h2>
				<form action="validation.php" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="user" class="form-control"required>
					</div>
					<div class="form-group">
						<label for="username">Password</label>
						<input type="password" name="password" class="form-control"required>
					</div>
						<button class="btn btn-primary">LOG IN</button>
				</form>
			</div>
			<div class="col-md-6 register">
				<h2>Register</h2>
				<form action="register.php" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="user" class="form-control"required>
					</div>
					<div class="form-group">
						<label for="username">Password</label>
						<input type="password" name="password" class="form-control"required>
					</div>
						<button class="btn btn-primary">REGISTER</button>
				</form>
			</div>
		</div>
		</div>
	</div>
</body>
</html>