<?php

$questionair = 
[ 
"img1"=>"./images/NationalDay.jpg",
"img2"=>"./images/Weather.jpg",
"img3"=>"./images/SingaporeGov.jpg",
"img4"=>"./images/Lau.jpg",
"img5"=>"./images/Blackpink.jpg",
"img6"=>"./images/COE.jpg",
"1"=>"Which of these National Day songs didn't exist?",
"2"=>"What was the lowest temperature ever recorded in Singapore?",
"3"=>"Which of the following associations do not exist in Singapore?",
"4"=>"Which is the oldest hawker centre in Singapore?",
"5"=>"Which one is not a member of the South Korean Girl Group BLANKPINK?",
"6"=>"What was the highest cost of a Certificate of Entitlement (COE) in Singapore's history?",
"1A"=>"Singapore Town (1967) by The Sidaislers",
"1B"=>"Our Singapore (2015) by JJ Lin",
"1C"=>"The Place We Belong (2007) - Taufik Batisah",
"1D"=>"Moments of Magic (1999) - Fann Wong, Tanya Chua and Elsa Lin", 
"2A"=>"21°C",
"2B"=>"20°C",
"2C"=>"19°C",
"2D"=>"18°C",
"3A"=>"Association of Singapore Attractions (ASA)",
"3B"=>"Body Maintenance Federation of Singapore (BMFS)",
"3C"=>"Restroom Association of Singapore (RAS)",
"3D"=>"Textile and Fashion Federation Singapore (TFFS", 
"4A"=>"People's Park Food Centre",
"4B"=>"Lau Pat Sat",
"4C"=>"Maxwell Food Centre",
"4D"=>"Tekka Market",
"5A"=>"Lisa",
"5B"=>"Jisoo",
"5C"=>"Rosy",
"5D"=>"Jessica",
"6A"=>"S$159,000",
"6B"=>"S$110,500",
"6C"=>"S$107,200",
"6D"=>"S$85,000" 
];

$std_anwser_sheet = 
            ["Q1"=>"1C", 
             "Q2"=>"2C" ,
             "Q3"=>"3B" ,
             "Q4"=>"4B" ,
             "Q5"=>"5C,5D",
             "Q6"=>"6B"
        ];

function PresentQuestion($question_no, $withImage)
{
    global $questionair;
    $question_id = "question" . $question_no;
    $question_img = $questionair["img" . $question_no];
    $question_text = $questionair[$question_no];
    $question_name = "answer-" . $question_no . "[]";  // ' . $question_no . ' 

    if($withImage)
    $question_html =
    '<div class="row" id=' . $question_id . '>' . 
            '<div class="col sm-12">' . 
                '<div class="qntxtbox">' .
                    '<img class="myimage" src=' . $question_img . '>' .
                    '<h4><span style="color:blue; font-weight:bold;">Question ' .
                    $question_no . '</span>: ' .  $question_text . '</h4>' .
                '</div>' .
                    '<input type="checkbox" id="answer-' . $question_no . 'A" name=' . $question_name. ' value="' . $question_no . 'A">' .
                    '<label for="answer-' . $question_no . 'A">' . $questionair[$question_no . 'A'] . '</label><br>' .
                    '<input type="checkbox" id="answer-' . $question_no . 'B" name=' . $question_name. ' value="' . $question_no . 'B">' .
                    '<label for="answer-' . $question_no . 'B">' . $questionair[$question_no . 'B'] . '</label><br>' .
                    '<input type="checkbox" id="answer-' . $question_no . 'C" name=' . $question_name. ' value="' . $question_no . 'C">' .
                    '<label for="answer-' . $question_no . 'C">' . $questionair[$question_no . 'C'] . '</label><br>' .
                    '<input type="checkbox" id="answer-' . $question_no . 'D" name=' . $question_name. ' value="' . $question_no . 'D">' .
                    '<label for="answer-' . $question_no . 'D">' . $questionair[$question_no . 'D'] . '</label>' .  
            '</div>' .
    '</div>';
    else
    $question_html =
    '<div class="row" id=' . $question_id . '>' . 
            '<div class="col sm-12">' .  
                    '<input type="checkbox" id="answer-' . $question_no . 'A" name=' . $question_name. ' value="' . $question_no . 'A">' .
                    '<label for="answer-' . $question_no . 'A">' . $questionair[$question_no . 'A'] . '</label><br>' .
                    '<input type="checkbox" id="answer-' . $question_no . 'B" name=' . $question_name. ' value="' . $question_no . 'B">' .
                    '<label for="answer-' . $question_no . 'B">' . $questionair[$question_no . 'B'] . '</label><br>' .
                    '<input type="checkbox" id="answer-' . $question_no . 'C" name=' . $question_name. ' value="' . $question_no . 'C">' .
                    '<label for="answer-' . $question_no . 'C">' . $questionair[$question_no . 'C'] . '</label><br>' .
                    '<input type="checkbox" id="answer-' . $question_no . 'D" name=' . $question_name. ' value="' . $question_no . 'D">' .
                    '<label for="answer-' . $question_no . 'D">' . $questionair[$question_no . 'D'] . '</label>' .  
            '</div>' .
    '</div>';

    return $question_html;  
} 

?>