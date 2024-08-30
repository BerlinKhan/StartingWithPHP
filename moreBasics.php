<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics Advanced</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    }
.container{
    max-width:80%;
    background-color:grey;
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
        <h1>Lets Learn PHP</h1>
        <h2>Conditional Statements</h2>
       <p>Your Party status is: </p>
    <?php
    $age= 6;
    if ($age >=25) {
        echo " You can go to the Party";
    } 
    elseif($age==6){
        echo "You are under age and cannot go to the party";
    }
    else {
        echo "You cannot go to the Party";
    };
    
    ?>

    <h2>Arrays</h2>
    <?php
    $lang=["urdu","english", "arabic", "deautch"];
    echo $lang[0];
    ?>

    <br></br>
    <h2>Loops</h2>
    <?php

    //simple while loop
    $a=0;
    while($a<5){
    echo "<br>The value of a is: ";
    echo $a;
    $a++;
    }

    //complex while loop
    echo"<br>";
    $a=0;
    while($a < count($lang)){
    echo "<br> The name of language is: ";
    echo $lang[$a];
    $a++;
    }

    //do while looop
    echo"<br>";
    $a=0;
    do {
        echo "<br>The value of a from dowhile loop is: ";
        echo $a;
        $a++;
    } while($a<5);

    //for loop
    echo"<br>";
    for ($i=0; $i<5;$i++){
        echo "<br>The value of a from for loop is: ";
        echo $i;
    }
   
    //foreach loop
    echo"<br>";
    foreach($lang as $val){
        echo "<br>The name of language from forEach loop is: ";
        echo $val;
    }
    ?>

   <!--Functions--> 
    <br></br>
    <h2>Functions</h2>
    <?php
    function sum($num1, $num2){
        echo"<br>Thw sum of ".$num1. 'and '.$num2.' is: '. $num1+$num2;
    }

    sum(5,5);
    sum(5,0);
    sum(2,5);
    ?>

<!--Strings--> 
<br></br>
    <h2>Strings</h2>
    <?php
    $str="Kashif Ahmad";
    $len=strlen($str);
    echo "The Length of the string is: ".$len;
    echo "<br>The nmumber of words in this string `".$str. "` are: ".str_word_count($str);
    echo "<br>The Reverse string is: ".strrev($str);
    ?>

    </div>
    
</body>
</html>