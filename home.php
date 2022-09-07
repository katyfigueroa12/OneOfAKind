<!-- This page is meant to show only 4  -->
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
  .col-md-3{
    border: 3px solid black;
    padding: 10%;
    margin-bottom: 3%;
    border-radius: 25px;
    font-size: 25px;
    position: relative;
  }
  #doc, #cup, #pills, #uterus{
    width: 150px;
    position: absolute;
    right: 0px;
    top: 0px;
    border-radius: 25px;
    /* border: 1px solid black; */
  }

  @media(min-width: 768px){
    .col-md-6{
      padding: 15%;
      position: relative;
    }
    #cup, #pills, #uterus{
    width: 50%;
    position: absolute;
    border-radius: 25px;
    /* border: 1px solid black; */
    left: 0;
    padding-top: 10%;
    
  }
  h2{
    position: absolute;
    right: 10px;
    text-align: center;
    font-size: 18px;
  }
  }
  
  @media(min-width: 992px){
    h2{
      font-size: 25px;
    }
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
                    <a class="nav-link active" href="home.php">Home</a>
                    <a class="nav-link" href="obgyn.php">OBGYN Recommendations</a>
                    <a class="nav-link" href="menstrualproducts.php">Menstrual Products</a>
                    <a class="nav-link" href="contraception.php">Contraception</a>
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
      <h3>Welcome to One of a Kind! Here you can find a plethora of infromation and items necessary for those that menstruate and those interested in learning more about menstruation!</h3>
    </div>

      <div class="row">
          
            <div class="col-md-3 offset-md-3">

              <button id="obgyn-btn" type="button">OBGYN</button>
              <div>
                <img id="doc" src="images/doctor.jpeg" alt="a menstrual cup in line art">
              </div>
            </div>

          <div id="box1" class="col-md-3 col-md-6">
          <button id="menstrualproduct-btn" type="button">Menstrual Products</button>
            <div>
              <img id="cup" src="images/cup.jpeg" alt="a menstrual cup in line art">
            </div>
          </div>

          <div id="box2" class="col-md-3 col-md-6">
            <button id="contraceptive-btn" type="button">Contraception</button>
            <div>
              <img id="pills" src="images/contraceptives.jpeg" alt="drawing of several contraception options">
            </div>
          </div>

          <!-- <div id="box3" class="col-md-3 col-md-6">
          <button id="policy-btn" type="button">Policy & More</button>
            <div>
              <img id="uterus" src="images/political.jpeg" alt="line art of a uterus">
            </div>
          </div> -->

          <div id="box4" class="col-md-3 col-md-6">
          <button id="about-btn" type="button">About One of a Kind™</button>
            <!-- <div>
              <img src="" alt="">
            </div> -->
          </div>

      </div>

  </div>

  <hr>

  <div class="footer">
    <p>2022 One of a Kind™ </p>
  </div>


  <script>

    document.querySelector("#obgyn-btn").onclick = function(){
      location.href = "obgyn.php"
    };
    
    document.querySelector("#menstrualproduct-btn").onclick = function(){
      location.href = "menstrualproducts.php"
    };

    document.querySelector("#contraceptive-btn").onclick = function(){
      location.href = "contraception.php"
    };

    // document.querySelector("#policy-btn").onclick = function(){
    //   location.href = "policyetc.php"
    // };

    document.querySelector("#about-btn").onclick = function(){
      location.href = "about.php"
    };
    
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

