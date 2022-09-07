<?php

var_dump($_POST);
$isInserted = false;

// Check to make sure that required fields are filled out
if ( !isset($_POST['obgyn_name']) || 
	empty($_POST['obgyn_name']) || 
	!isset($_POST['reviews']) || 
	empty($_POST['reviews']) || 
	!isset($_POST['year']) || 
	empty($_POST['year']) ||
	!isset($_POST['rating']) || 
	empty($_POST['rating']) || 
	!isset($_POST['contraceptive_type']) || 
	empty($_POST['contraceptive_type']) || 
	!isset($_POST['menstrualproduct_type']) || 
	empty($_POST['menstrualproduct_type']) ) {

		$error = "Please fill out all required fields";
}
else {
	$host = "303.itpwebdev.com";
	$user = "katy_db_user";
	$password = "katyfigueroa1";
	$db = "kafiguer_uterusproject_db";

	$mysqli = new mysqli($host, $user, $password, $db);
	if ( $mysqli->errno ) {
		echo $mysqli->error;
		exit();
	}

	// Write out the INSERT statement to add this song to the database
	$sql = "INSERT INTO obgyns(name, reviews, rating, licensed, contraceptives_id, menstrualproducts_id)
	VALUES('" . $_POST["obgyn_name"] . "',"
	. $_POST["reviews"] . ", " . $_POST["rating"] . ", " . $_POST["year"] . "," . $_POST["contraceptive_type"] . "," . $_POST["menstrualproduct_type"] . ");";

	//echo "<hr>" . $sql . "<hr>";

	// Run the statement!
	$results = $mysqli->query($sql);
	if(!$results) {
		echo $mysqli->error;
		exit();
	}

	// $mysqli->affected_rows will return the number of rows that were inserted
	echo "<hr>" . $mysqli->affected_rows . "<hr>";

	if($mysqli->affected_rows == 1){
		$isInserted = true;
	}
	
	$mysqli->close();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Confirmation | OBGYN Recommendations</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-custom navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><strong>One of a Kind</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-link" href="home.php">Home</a>
					<div class="dropdown">
						<button class="dropbtn">

                    <!-- <a class="nav-link" href="obgyn.php">OBGYN Recommendations</a> -->
                    <a class="nav-link" href="menstrualproducts.php">Menstrual Products</a>
                    <a class="nav-link" href="contraception.php">Contraception</a>
                    <!-- <a class="nav-link" href="policyetc.php">Policy & More</a> -->
                    <a class="nav-link active" href="about.php">About One of a Kind™</a>
                </div>
            </div>
        </div>
  </nav>
	<div class="container">
		<div class="row">
			<h1 class="col-12 mt-4">Add a Recommendation</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->
	<div class="container">
		<div class="row mt-4">
			<div class="col-12">

			<?php if(isset($error) && !empty($error)):?>
				<div class="text-danger">
					<?php echo $error;?>
				</div>
			<?php endif;?>
			
			<?php if($isInserted) : ?>
				<div class="text-success">
					<span class="font-italic"><?php echo $_POST["obgyn_name"];?></span>'s recommendation was successfully added.
				</div>
			<?php endif;?>

			</div> <!-- .col -->
		</div> <!-- .row -->
		<div class="row mt-4 mb-4">
			<div class="col-12">
				<a href="addobgyn.php" role="button" class="btn btn-primary">Back to Add Form</a>
			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</body>
</html>