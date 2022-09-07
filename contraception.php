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

    $sql = "SELECT contraceptives.brand AS brand, contraceptives.type AS type, contraceptives.price AS price, contraceptives.rating AS rating FROM contraceptives";

	$results = $mysqli->query($sql);
	if ( !$results ) {
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
<style>
    #info-box{
        border: 2px solid black;
        padding: 1%;
        margin-top: 1%;
        margin-bottom: 1%;
    }

    #conpage-info{
        padding: 5%;
    }

</style>

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

  <div id="conpage-info">
      Contraception is meant to be accessible to all! Below you can find a pletheroa of information about all the different types of products that exist! 
      ~Enjoy~
  </div>

  <div class="container">
      <div class="row">
        <?php while ($row = $results->fetch_assoc() ) : ?>
        <div id="info-box" class="col-4">
            <div><strong>Name:</strong> <?php echo $row["brand"]; ?></div>
            <div><strong>Type:</strong> <?php echo $row["type"]; ?></div>
            <div><strong>Price:</strong> <?php echo $row["price"]; ?></div>
            <div><strong>Rating:</strong><?php echo $row["rating"]; ?>/5</div>
        </div>
        <?php endwhile; ?>
      </div>
  </div>

  <hr>

  <div class="footer">
        <p>2022 One of a Kind™ </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>