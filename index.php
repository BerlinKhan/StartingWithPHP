<?php
    $insert= false;
    if(isset($_POST["name"])){
    $server = "localhost";
    $userName= "root";
    $password = "";
    $conn =  mysqli_connect($server,$userName, $password);
    if (!$conn) {
        die("Connection Fialed due to: ". mysqli_connect_error());
    } else {;
    //    echo("Successfully Connected to DB");
    }

    $name= $_POST["name"];
    $gender= $_POST["gender"];
    $age= $_POST["age"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $desc= $_POST["desc"];

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`)
     VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc',current_timestamp());";
    // echo $sql;
    
    if ($conn -> query($sql)== true) {
        // echo "Successfully inserted";
        $insert= true;
    } else {
        echo "Erro: $sql <br> $conn->error";
    }
    
    $conn-> close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conatiner">
        <h1>Wellcome to Switzerland Trip Form</h1>
        <p>Please enter the details carefully and submit the form to confirm your participation in the trip</p>
        <?php
        if($insert==true){
        echo "<p>Thank you for submitting the form.</p>";
        };

        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" rows="10" cols="30" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>