<?php
    
    $host = "303.itpwebdev.com";
	$user = "kafiguer_db_user";
	$pass = "katyfigueroa1";
	$db = "kafiguer_uterusproject_db";

    $mysqli = new mysqli($host, $user, $pass, $db);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}

	$mysqli->set_charset('utf8');

    
	$sql_contraceptives = "SELECT * FROM contraceptives;";
    $results_contraceptives = $mysqli->query($sql_contraceptives);
    if ( $results_contraceptives == false ) {
        echo $mysqli->error;
        exit();
    }

    $sql_menstrualproducts = "SELECT * FROM menstrualproducts;";
    $results_menstrualproducts = $mysqli->query($sql_menstrualproducts);
    if ( $results_menstrualproducts == false ) {
        echo $mysqli->error;
        exit();
    }

	$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One of a Kind</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="CSSpages/style.css">


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
                    <a class="nav-link" href="obgyn.php">OBGYN Recommendations</a>
                    <a class="nav-link" href="menstrualproducts.php">Menstrual Products</a>
                    <a class="nav-link active" href="contraception.php">Contraception</a>
                    <!-- <a class="nav-link" href="policyetc.php">Policy & More</a> -->
                    <a class="nav-link" href="about.php">About One of a Kind™</a>
                </div>
            </div>
        </div>
  </nav>

  <div id="header">
        <h1>One of a Kind</h1>
  </div>

  

  <div class="container">
      <div class="row">
        Care to share your thoughts as an OBGYN? Create a recommendation!
      </div>
  </div>

  <div class="container">
        <form action="add_confirm.php" method="POST">

            <div class="form-group row">
				<label for="obgyn" class="col-md-4 col-form-label text-sm-center">
					OBGYN Name: <span class="text-danger">*</span>
				</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="obgyn-id" name="obgyn_name">
				</div>
			</div>

            <div class="form-group row">
				<label for="reviews-id" class="col-md-4 col-form-label text-sm-center">
					Reviews: <span class="text-danger">*</span>
				</label>
				<div class="col-sm-9">
					<input type="number" class="form-control" id="reviews-id" name="reviews">
				</div>
			</div>

            <div class="form-group row">
				<label for="rating" class="col-md-4 col-form-label text-sm-center">
					Patient Rating: <span class="text-danger">*</span>
				</label>
				<div class="col-sm-9">
				<select name="rating" id="rating" class="form-control">
						<option value="" selected disabled>-- Select One --</option>

						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>

					</select>
				</div>
			</div>

            <div class="form-group row">
				<label for="licensed-id" class="col-md-4 col-form-label text-sm-center">
					Year Licensed: <span class="text-danger">*</span>
				</label>
				<div class="col-sm-9">
					<input type="number" class="form-control" id="year-id" name="year">
				</div>
			</div>

            <div class="form-group row">
				<label for="con-type-id" class="col-md-4 col-form-label text-sm-center">
					Preferred Recommended Contraceptive: <span class="text-danger">*</span>
					
				</label>
				
				<div class="col-sm-9">
					<select name="contraceptive_type" id="contraceptive-type-id" class="form-control">
						<option value="" selected disabled>-- Select One --</option>

						<?php while( $row = $results_contraceptives->fetch_assoc() ): ?>

							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['brand']; ?>
							</option>

						<?php endwhile; ?>

					</select>
				</div>
				<div>
				<button type="button" class="btn btn-link"> Click here for more information on the site's available menstrual products!</button>
				</div>
			</div> <!-- .form-group -->

            <div class="form-group row">
				<label for="con-type-id" class="col-md-4 col-form-label text-sm-center">
					Preferred Recommended Menstruation Product: <span class="text-danger">*</span>
				</label>
				
				<div class="col-sm-9">
					<select name="menstrualproduct_type" id="menstrualproduct-id" class="form-control">
						<option value="" selected disabled>-- Select One --</option>

						<?php while( $row = $results_menstrualproducts->fetch_assoc() ): ?>

							<option value="<?php echo $row['id']; ?>">
								<?php echo $row['brand']; ?>
							</option>

						<?php endwhile; ?>

					</select>
				</div>
				<div>
				<button type="button" class="btn btn-link"> Click here for more information on the site's available contraceptives!</button>
				</div>
			</div> <!-- .form-group -->

            <div class="form-group row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 mt-2">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="reset" class="btn btn-light">Reset</button>
				</div>
			</div> <!-- .form-group -->
            
        </form>
  </div>

  <hr>

  <div class="footer">
        <p>2022 One of a Kind™ </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>