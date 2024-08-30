<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        Hello PHP
    <?php
    echo "Hello from PHP";

    $var1= 2;
    $var2=10;
    echo "<br>";
    echo $var1;
    echo "<br>";
    echo $var2;
    echo "<br>";
    echo "The sum of two vairiables is ";
    echo $var1+$var2;
    echo "<br>";
    echo "The minus of two vairiables is ";
    echo $var1-$var2;
    echo "<br>";
    echo "The multiply of two vairiables is ";
    echo $var1*$var2;
    echo "<br>";
    echo "The division of two vairiables is ";
    echo $var1/$var2;

    echo "<br>";
    $newVar =$var1;
    $newVar /=2;
    echo "The value of new var is ";
    echo $newVar;
    echo "<br>";
    echo "<h1>Comparison Operators</h1>";
    echo "The Value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "The Value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The Value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The Value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    echo "<h1>Increment/ Decrement  Operators</h1>";
    echo $var1++;
    echo " The increment++ value of var is ";
    echo $var1;
    echo "<br>";
    echo $var1--;
    echo " The decrement++ value of var is ";
    echo $var1;
    echo "<br>";
    echo ++$var2;
    echo " The ++increment value of var is ";
    echo $var2;
    echo "<br>";
    echo --$var2;
    echo " The ++decrement value of var is ";
    echo $var2;
    echo "<br>";
    echo "<h1>Logicaal Operators</h1>";
    $myVar= (true || false);
    echo var_dump($myVar)
    ?>
    </div>
</body>
</html>