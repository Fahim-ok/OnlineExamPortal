<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Exam Portal</title>
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
						<a class="nav-link active" href="student_home_page.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Log Out</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<section>
		<div class="mt-5 card w-75 loginBox">
			<div class="card text-center">
				<div class="card-header">
					<b>Featured</b>
				</div>
				<section id="section1">
					<div class="title mt-5"> Courses List </div>
					<div
						style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#75e4f3;">
						<div class="row" style="padding:5px;">
							<div class="col-md-4"><b> Course Name </b></div>
							<div class="col-md-4"><b> Course Code </b></div>
							<div class="col-md-4"><b> Exam </b></div>
						</div>
						<div class="row" style="padding:5px;">
							<div class="col-md-4">
								<p>MATHEMATICS</p>
							</div>
							<div class="col-md-4">
								<p>001</p>
							</div>
							<div class="col-md-4">
								<a href="mcq_mat.php" target="_blank" style = "text-decoration: none">Question</a>
							</div>

							<div class="col-md-4">
								<p>ENGLISH</p>
							</div>
							<div class="col-md-4">
								<p>002</p>
							</div>
							<div class="col-md-4">
								<a href="mcq_eng.php" target="_blank" style = "text-decoration: none">Question</a>
							</div>

							<div class="col-md-4">
								<p>CHEMISTRY</p>
							</div>
							<div class="col-md-4">
								<p>003</p>
							</div>
							<div class="col-md-4">
								<a href="mcq_che.php" target="_blank" style = "text-decoration: none">Question</a>
							</div>
						</div>				                 
					</div>
				</section>
			</div>
		</div>
	</section>	
</body>
</html>
