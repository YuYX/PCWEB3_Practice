

<!doctype html>
<html lang="en">

<head>
    <title>The Hardest Quiz</title>
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
    GetHeader("Home");
    ?> 

    <h1>The Hardest Quiz</h1>
    <!--
    <div style="position:fixed; background-color:aquamarine; margin-left:60%;">
        <div class="question_index">
            <a href="#question1">1</a>
        </div>
        <div class="question_index">
            <a href="#question2">2</a>
        </div>
        <div class="question_index">
            <a href="#question3">3</a>
        </div>
        <div class="question_index">
            <a href="#question4">4</a>
        </div>
        <div class="question_index">
            <a href="#question5">5</a>
        </div>
        <div class="question_index">
            <a href="#question6">6</a>
        </div>
    </div> -->
    
    <form action="index.php" method="post" id="quiz">
        <hr class="rounded">
        
        <?php 
         include "questions.php";  
         
        $total_questions = 6; 

        for($qi=1; $qi<=$total_questions; $qi++)
        {
            echo PresentQuestion($qi, true); 
            echo "<br> <hr class=\"rounded\">";
        }
         /*echo PresentQuestion(1, true); 
         echo "<br> <hr class=\"rounded\">";
         echo PresentQuestion(2, true);
         echo "<br> <hr class=\"rounded\">";
         echo PresentQuestion(3, true);
         echo "<br> <hr class=\"rounded\">";
         echo PresentQuestion(4, true);
         echo "<br> <hr class=\"rounded\">";
         echo PresentQuestion(5, true);
         echo "<br> <hr class=\"rounded\">";*/
        ?>

        <!--
        <div class="row" id="question-1">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="myimage" src="./images/NationalDay.jpg">
                    <h4><span style="color:blue; font-weight:bold;">Question 1</span>: Which of these National Day songs didn't exist?</h4>
                </div> 
                    <input type="checkbox" id="answer-1A" name="answer-1[]" value="1A">
                    <label for="answer-1A">Singapore Town (1967) by The Sidaislers</label><br>
                    <input type="checkbox" id="answer-1B" name="answer-1[]" value="1B">
                    <label for="answer-1B">Our Singapore (2015) by JJ Lin</label><br>
                    <input type="checkbox" id="answer-1C" name="answer-1[]" value="1C">
                    <label for="answer-1C">The Place We Belong (2007) - Taufik Batisah</label><br> 
                    <input type="checkbox" id="answer-1D" name="answer-1[]" value="1D">
                    <label for="answer-1D">Moments of Magic (1999) - Fann Wong, Tanya Chua and Elsa Lin</label>  
            </div>
        </div> 
        <hr class="rounded">
        <div class="row" id="question-2">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="myimage" src="/quiz_yyx/images/Weather.jpg">
                    <h4><span style="color:blue; font-weight:bold;">Question 2</span>: What was the lowest temperature ever recorded in Singapore?</h4>
                </div> 
                    <input type="checkbox" id="answer-2A" name="answer-2[]" value="2A">
                    <label for="answer-2A">21°C</label><br>
                    <input type="checkbox" id="answer-2B" name="answer-2[]" value="2B">
                    <label for="answer-2B">20°C</label><br>
                    <input type="checkbox" id="answer-2C" name="answer-2[]" value="2C">
                    <label for="answer-2C">19°C</label><br>  
                    <input type="checkbox" id="answer-2D" name="answer-2[]" value="2D">
                    <label for="answer-2D">18°C</label>  
            </div>
        </div>
        <br>
        <hr class="rounded">
        <div class="row" id="question-3">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="myimage" src="/quiz_yyx/images/SingaporeGov.jpg">
                    <h4><span style="color:blue; font-weight:bold;">Question 3</span>: Which of the following associations do not exist in Singapore?</h4>
                </div> 
                    <input type="checkbox" id="answer-3A" name="answer-3[]" value="3A">
                    <label for="answer-3A">Association of Singapore Attractions (ASA)</label><br>
                    <input type="checkbox" id="answer-3B" name="answer-3[]" value="3B">
                    <label for="answer-3B">Body Maintenance Federation of Singapore (BMFS)</label><br>  
                    <input type="checkbox" id="answer-3C" name="answer-3[]" value="3C">
                    <label for="answer-3C">Restroom Association of Singapore (RAS)</label><br>
                    <input type="checkbox" id="answer-3D" name="answer-3[]" value="3D">
                    <label for="answer-3D">Textile and Fashion Federation Singapore (TFFS)</label> 
            </div>
        </div> 
        <br>
        <hr class="rounded">
        <div class="row" id="question-4">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="myimage" src="/quiz_yyx/images/Lau.jpg">
                    <h4><span style="color:blue; font-weight:bold;">Question 4</span>: Which is the oldest hawker centre in Singapore?</h4>
                </div> 
                    <input type="checkbox" id="answer-4A" name="answer-4[]" value="4A">
                    <label for="answer-4A">People's Park Food Centre</label><br>
                    <input type="checkbox" id="answer-4B" name="answer-4[]" value="4B">
                    <label for="answer-4B">Lau Pat Sat</label><br>  
                    <input type="checkbox" id="answer-4C" name="answer-4[]" value="4C">
                    <label for="answer-4C">Maxwell Food Centre</label><br>
                    <input type="checkbox" id="answer-4D" name="answer-4[]" value="4D">
                    <label for="answer-4D">Tekka Market</label>  
            </div>
        </div>

        <br>
        <hr class="rounded">
        <div class="row" id="question-5">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="myimage" src="/quiz_yyx/images/Blackpink.jpg">
                    <h4><span style="color:blue; font-weight:bold;">Question 5</span>: Which one is not a member of the South Korean Girl Group BLANKPINK?</h4>
                </div> 
                    <input type="checkbox" id="answer-5A" name="answer-5[]" value="5A">
                    <label for="answer-5A">Lisa</label><br>
                    <input type="checkbox" id="answer-5B" name="answer-5[]" value="5B">
                    <label for="answer-5B">Jisoo</label><br> 
                    <input type="checkbox" id="answer-5C" name="answer-5[]" value="5C">
                    <label for="answer-5C">Rosy</label><br>
                    <input type="checkbox" id="answer-5D" name="answer-5[]" value="5D">
                    <label for="answer-5D">Jessica</label>
            </div>
        </div>
        -->

        <input style="color:white; background-color:darkcyan; font-size:32px; width:120; height:80;"  
        type="submit" class="div_center" name="submit" value="Submit Quiz"><br><br>
    </form>  
    

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <div class="modal-content">
            <div>
                <img class="myimage" src="./images/Score.jpg" style="display:block;margin-top:4px;margin-left:auto;margin-right:auto;width:50%;">
            </div>
            <div style="color:coral; font-size:42px; font-weight:bold;" id="caption">Your Score:</div> 
            <img id="fullmark" src="./images/GreatJob.webp" style="display:none;margin-top:4px;margin-left:auto;margin-right:auto;width:10%;">
            <hr class="rounded">
            <div id="comment_over" style="color:darkgoldenrod;font-size:28;"></div>
        </div>
    </div>  

    <script>  
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
        modal.style.display = "none";
        }
    </script>

    <?php
        //include "questions.php";
        /*$questionair = 
        [ 
        "1"=>"Question 1: Which of these National Day songs didn't exist?",
        "2"=>"Question 2: What was the lowest temperature ever recorded in Singapore?",
        "3"=>"Question 3: Which of the following associations do not exist in Singapore?",
        "4"=>"Question 4: Which is the oldest hawker centre in Singapore?",
        "5"=>"Question 5: Which one is not a member of the South Korean Girl Group BLANKPINK?",
        "1A"=>"Singapore Town (1967) by The Sidaislers",
        "1B"=>"Our Singapore (2015) by JJ Lin",
        "1C"=>"The Place We Belong (2007) - Taufik Batisah",
        "1D"=>"Moments of Magic (1999) - Fann Wong, Tanya Chua and Elsa Lin", 
        "3A"=>"Association of Singapore Attractions (ASA)",
        "3B"=>"Body Maintenance Federation of Singapore (BMFS)",
        "3C"=>"Restroom Association of Singapore (RAS)",
        "3D"=>"Textile and Fashion Federation Singapore (TFFS", 
        "2A"=>"21°C",
        "2B"=>"20°C",
        "2C"=>"19°C",
        "2D"=>"18°C",
        "5A"=>"Lisa",
        "5B"=>"Jisoo",
        "5C"=>"Rosy",
        "5D"=>"Jessica", 
        "4A"=>"People's Park Food Centre",
        "4B"=>"Lau Pat Sat",
        "4C"=>"Maxwell Food Centre",
        "4D"=>"Tekka Market" 
        ];*/

        //$total_questions = 5;
        $score = 0; 
        $comment_over_answer = array();
        $summary_over_answer = "<br>";
        /*$std_anwser_sheet = 
            ["Q1"=>"1C", 
             "Q2"=>"2C" ,
             "Q3"=>"3B" ,
             "Q4"=>"4B" ,
             "Q5"=>"5C,5D" 
        ];*/
        $answer_sheet = array();

        function GetQuestionAnswer($question_idx)
        {
            global $answer_sheet;
            $que_no = "Q" . $question_idx;
            $ans_selected = "";
            if(isset($_POST['answer-'. $question_idx])) 
            {
                $Answer = $_POST['answer-'. $question_idx];
                $N = count($Answer); 
                
                if($N>0)
                {  
                    for($i=0; $i<$N; $i++)
                    {  
                        if($ans_selected != "")
                        {
                            $ans_selected = $ans_selected . "," . $Answer[$i];
                        }
                        else
                        {
                            $ans_selected = $Answer[$i];
                        } 
                    } 
                    $answer_sheet[$que_no] = $ans_selected;
                }  
                else
                {
                    $answer_sheet[$que_no] = "NONE";
                }
            }
            else
            {
                $answer_sheet[$que_no] = "NONE";
            }
        } 
        
        if (isset($_POST['submit']))
        {  
            for ($i=0; $i<$total_questions; $i++)
            { 
                GetQuestionAnswer($i+1);
            }  
            
            $answer_count = count($answer_sheet);
            //echo "answer: " . $answer_count;
            if( $answer_count>0)
            { 
                 foreach($answer_sheet as $qs => $ans)
                 {
                    if($answer_sheet[$qs] == $std_anwser_sheet[$qs])
                    {
                        $score++;
                        $comment_over_answer[$qs] = "Correct!"; 
                        $summary_over_answer = $summary_over_answer . $qs . ":" . $comment_over_answer[$qs] . "<br>";
                    }
                    else
                    {
                        $comment_over_answer[$qs] = "OOPS! Correct Answer:";
                        $ans4this =explode("," , $std_anwser_sheet[$qs]);  
                        for($ai=0; $ai<count($ans4this); $ai++)
                        { 
                            $comment_over_answer[$qs] = $comment_over_answer[$qs] . $questionair[$ans4this[$ai]] . " ";
                        }
                        $summary_over_answer = $summary_over_answer . $qs . ":" . $comment_over_answer[$qs] . "<br>";
                    }
                    
                    //echo "<br>" . $qs . ", answer:" . $ans . "<br>" . $comment_over_answer[$qs];
                 }
            }  
            //echo "<br>Your Score:" . $score . "!"; 
            echo "<script>
            var modal = document.getElementById('myModal');  
            var CurCaptionText = document.getElementById('caption'); 
            var CurComments = document.getElementById('comment_over'); 
            var fullMarkImg = document.getElementById('fullmark');  
            modal.style.display = 'block';    
            CurCaptionText.innerHTML = 'Your score:{$score} of {$total_questions}';
            if($score == $total_questions){fullMarkImg.style.display = \"block\"};

            CurComments.innerHTML = '{$summary_over_answer}'; 
            </script>";
        }
    ?> 

</body>

</html>