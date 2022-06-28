

<!doctype html>
<html lang="en">

<head>
    <title>Quiz - Standard Answers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS (works only if you have downloaded Bootstrap; if not, paste over from a Bootstrap website) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">  
</head>

<body> 
<?php 
    include "header.php";  
    GetHeader("Reference");
    ?>
    <!--
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#">
            <img src="./images/avire-logo.png" width="90" height="30" alt="AVIRE">
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="./ref.php">Reference</a>
            </li> 
            </ul>
        </div>
    </nav>  -->
   

    <h1>Quiz - Standard Answers</h1>
    
    <form action="index.php" method="post" id="quiz">
        <hr class="rounded">
        <div class="row" id="question-1">
            <div class="col sm-12"> 
                    <input type="checkbox" id="answer-1A" name="answer-1[]" value="1A">
                    <label for="answer-1A">Singapore Town (1967) by The Sidaislers</label><br>
                    <input type="checkbox" id="answer-1B" name="answer-1[]" value="1B">
                    <label for="answer-1B">Our Singapore (2015) by JJ Lin</label><br>
                    <input type="checkbox" id="answer-1C" name="answer-1[]" value="1C" checked>
                    <label for="answer-1C">The Place We Belong (2007) - Taufik Batisah</label><br><!-- Correct -->
                    <input type="checkbox" id="answer-1D" name="answer-1[]" value="1D">
                    <label for="answer-1D">Moments of Magic (1999) - Fann Wong, Tanya Chua and Elsa Lin</label>
             
                <!--
                <input class="ans" type="text" name="answer-1" placeholder="Answer here" />
                -->
            </div>
        </div>
        <hr class="rounded">
        <div class="row" id="question-2">
            <div class="col sm-12"> 
                    <input type="checkbox" id="answer-2A" name="answer-2[]" value="2A">
                    <label for="answer-2A">21°C</label><br>
                    <input type="checkbox" id="answer-2B" name="answer-2[]" value="2B">
                    <label for="answer-2B">20°C</label><br>
                    <input type="checkbox" id="answer-2C" name="answer-2[]" value="2C" checked>
                    <label for="answer-2C">19°C</label><br> <!-- Correct -->
                    <input type="checkbox" id="answer-2D" name="answer-2[]" value="2D">
                    <label for="answer-2D">18°C</label> 
                <!--
                <input class="ans" type="text" name="answer-2" placeholder="Answer here" />
                -->
            </div>
        </div>
        <br>
        <hr class="rounded">
        <div class="row" id="question-3">
            <div class="col sm-12"> 
                    <input type="checkbox" id="answer-3A" name="answer-3[]" value="3A">
                    <label for="answer-3A">Association of Singapore Attractions (ASA)</label><br>
                    <input type="checkbox" id="answer-3B" name="answer-3[]" value="3B" checked>
                    <label for="answer-3B">Body Maintenance Federation of Singapore (BMFS)</label><br> <!-- Correct -->
                    <input type="checkbox" id="answer-3C" name="answer-3[]" value="3C">
                    <label for="answer-3C">Restroom Association of Singapore (RAS)</label><br>
                    <input type="checkbox" id="answer-3D" name="answer-3[]" value="3D">
                    <label for="answer-3D">Textile and Fashion Federation Singapore (TFFS)</label>
                 
                <!--
                <input class="ans" type="text" name="answer-3" placeholder="Answer here" />
                 -->
            </div>
        </div> 
        <br>
        <hr class="rounded">
        <div class="row" id="question-4">
            <div class="col sm-12"> 
                    <input type="checkbox" id="answer-4A" name="answer-4[]" value="4A">
                    <label for="answer-4A">People's Park Food Centre</label><br>
                    <input type="checkbox" id="answer-4B" name="answer-4[]" value="4B" checked>
                    <label for="answer-4B">Lau Pat Sat</label><br> <!-- Correct -->
                    <input type="checkbox" id="answer-4C" name="answer-4[]" value="4C">
                    <label for="answer-4C">Maxwell Food Centre</label><br>
                    <input type="checkbox" id="answer-4D" name="answer-4[]" value="4D">
                    <label for="answer-4D">Tekka Market</label> 
                <!--
                <input class="ans" type="text" name="answer-3" placeholder="Answer here" />
                 -->
            </div>
        </div>

        <br>
        <hr class="rounded">
        <div class="row" id="question-5">
            <div class="col sm-12"> 
                    <input type="checkbox" id="answer-5A" name="answer-5[]" value="5A">
                    <label for="answer-5A">Lisa</label><br>
                    <input type="checkbox" id="answer-5B" name="answer-5[]" value="5B">
                    <label for="answer-5B">Jisoo</label><br> 
                    <input type="checkbox" id="answer-5C" name="answer-5[]" value="5C" checked>
                    <label for="answer-5C">Rosy</label><br><!-- Correct -->
                    <input type="checkbox" id="answer-5D" name="answer-5[]" value="5D" checked>
                    <label for="answer-5D">Jessica</label><!-- Correct --> 
                <!--
                <input class="ans" type="text" name="answer-3" placeholder="Answer here" />
                 -->
            </div>
        </div> 
    </form>   

</body>

</html>