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
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Admin_login.php">Log out</a>
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
        <section>
          <div class="title mt-5"> All Students List </div>
          <div
            style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#66b3ff;">
            <div class="row" style="padding:5px;">
              <div class="col-md-4"><b> User ID </b></div>
              <div class="col-md-4"><b> Subject </b></div>
              <div class="col-md-3"><b> Score </b></div>
            </div>
            <?php 
        			require_once("dbconnect.php");
        			$sql = "SELECT * FROM reportcard";
        			$result = mysqli_query($conn, $sql);
        			if(mysqli_num_rows($result) > 0){
        				//here we will print every row that is returned by our query $sql
        				while($row = mysqli_fetch_array($result)){
        				//here we have to write some HTML code, so we will close php tag
        			?>
            <div class="row" style="padding:5px;">
              <div class="col-md-4">
                <?php echo $row[0]; ?>
              </div>
              <div class="col-md-4">
                <?php echo $row[1]; ?>
              </div>
              <div class="col-md-3">
                <?php echo $row[2] ?>
              </div>
            </div>
            <?php 
        				}					
        			}
        			?>
          </div>
        </section>
      </div>
    </div>
  </section>
</body>
</html>