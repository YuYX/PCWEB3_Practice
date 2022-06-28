<?php
    function GetHeader($pageName)
    { 
        if($pageName == "Home")
        {
            echo 
            '<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="#" style="color:aqua; font-weight:bold;">
                <img src="./images/avire-logo.png" width="90" height="30" alt="AVIRE">&nbsp;AVIRE Global
            </a> 
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link disabled" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ref.php">Reference</a>
                    </li> 
                </ul> 
                <ul class="nav navbar-nav navbar-right">
                    <li><label><span class="question_nav"></span> Jump to Question: </label></li>
                    <li><a href="#question1"><span class="question_nav"></span>1</a></li>
                    <li><a href="#question2"><span class="question_nav"></span>2</a></li>
                    <li><a href="#question3"><span class="question_nav"></span>3</a></li>
                    <li><a href="#question4"><span class="question_nav"></span>4</a></li>
                    <li><a href="#question5"><span class="question_nav"></span>5</a></li>
                    <li><a href="#question6"><span class="question_nav"></span>6</a></li>
                </ul>
            </div>
            </nav>';
        }
        else if ($pageName == "Reference")
        {
            echo 
            '<nav class="navbar navbar-expand-lg navbar-light bg-success">
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
            </nav>';
        }
    }  
?>