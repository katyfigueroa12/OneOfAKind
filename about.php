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
    img{
        max-width: 100%;
        border-radius: 50%;
        padding: 5%;
    }

    @media(min-width: 768px){
        #pic1, #pic2{
            max-width: 300px;
        }

        #pic3{
            max-width: 300px;
        }
    }


    @media(min-width: 992px){
        #pic1, #pic2{
            max-width: 450px;
            margin: 20%;
        }
        #pic3{
            max-width: 450px;
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
                    <a class="nav-link" href="home.php">Home</a>
                    <a class="nav-link" href="obgyn.php">OBGYN Recommendations</a>
                    <a class="nav-link" href="menstrualproducts.php">Menstrual Products</a>
                    <a class="nav-link" href="contraception.php">Contraception</a>
                    <!-- <a class="nav-link" href="policyetc.php">Policy & More</a> -->
                    <a class="nav-link active" href="about.php">About One of a Kind™</a>
                </div>
            </div>
        </div>
  </nav>

  <div id="header">
        <h1>One of a Kind</h1>
  </div>

  <div class="container">
        <div class="row">
            <div class="col">
            <img id="pic1" src="images/momandkaty.jpeg" alt="Adelia, Katy's mom, and Katy hugging one another">
            </div>
            <div class="col">
            <img id="pic2" src="images/amyandkaty.jpeg" alt="Amy, Katy's sister, and Katy sitting on different rocks">
            </div>
        </div>

        <div class="row">
            <h3>How One of a Kind Came to Exist</h3>
            <p>One of a Kind™ Came about on a Monday night after the founder, Katy Figueroa, had an ITP 303 final project proposal due for class at 11:59PM. Katy started to think about what was an issue that she encountered when trying to manage her menstrual cycle and also with her sister and mom in mind. With an increase in government involvement with people with uteruses increasing, specifically with the overturning of Roe versus Wade always being at risk, Katy thought it to be important to create a center of information where people could easily access all of their needs at once.</p>
        </div>

        <div class="row">
            <div>
                <img id="pic3" src="images/katyinflowers.jpeg" alt="Katy sitting in a field of yellow flowers">
            </div>
            <h3>Founder: Katy Figueroa</h3>
            <p>Katy Figueroa is a senior at USC who will graduate with a Bachelor of Science in Computational Neuroscience along with a minor in Computer Programming. She was born in Lawrenceville, Georgia and moved to Los Angeles to pursue her dreams of becoming a doctor. </p>
        </div>

        <div class="row">
            <h3>Dedications</h3>
            <p>Katy would like to dedicate her work to her mother, Adelia, her sister, Amy, and her friends. At a time where human rights of those with uteruses is at risk, she hopes to provide as much help as she can to fight for the cause.</p>
        </div>

        

  </div>

  <hr>

  <div class="footer">
        <p>2022 One of a Kind™ </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
