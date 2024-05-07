<?php

if(isset($_POST["name"]))
{
    $server = "localhost";
    $username = "root";
    $password = "Sameer@9757"; // Update this with your actual MySQL password
    $dbname = "win";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("Connection to this database failed due to ". mysqli_connect_error());
    }

    $name = $_POST['name']; 
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number']; 
    $info = $_POST['info'];

    $sql = "INSERT INTO `win`.`tripp` (`name`, `age`, `gender`, `email`, `number`, `info`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$number', '$info', current_timestamp())";

    echo $sql;

    if ($con->query($sql) == TRUE) {
        echo "Successfully Inserted";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>
