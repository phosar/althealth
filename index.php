<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Quality Health</title>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Quality Health</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


    <h1>The list of all my invoices in descending dates</h1>
	<?php
	//connect to database
	$db = new PDO("mysql:host=localhost;dbname=qualityhealth","root", "");
	
	$query = "SELECT * FROM invoice ORDER BY invoice_date DESC";
	
	$result = $db->query($query);
	
	foreach($result as $res){
		echo "Invoice ID: " . $res["invoice_id"] . " Invoice Number: " . $res["invoice_num"] . " Invoice Date: " . $res["invoice_date"] 
		 . "Client ID: " . $res["client_id"] . "<br><br>";
	}
	
	
	?>

    
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>