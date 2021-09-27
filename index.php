<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Exam System</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

</head>

<body>

	<div class="navbar-placement">
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container-fluid left">
				<a class="navbar-brand" href="#">Online Exam System</a>
			</div>
			<div class="options d-flex right">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="Admin_login.php">Admin</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	<section>
		<div class="mt-5 card w-75 loginBox">
			<div class="card text-center">
				<div class="card-header">
					<b>Student Login</b>
				</div>
				<form action="signin.php" class="form_design mt-5" method="post">
					User ID: <input type="text" name="ID"> <br /><br />
					Password: <input type="password" name="pass"> <br /> <br />
					<input type="submit" value="Sign In">
				</form>
			</div>
		</div>
	</section>
</body>

</html>