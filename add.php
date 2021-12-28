<?php
  
    // form parameters
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $age = $_GET["age"];
    $gender = $_GET["gender"];
    $interests = $_GET["interests"];
    $animal = $_GET["animal"];

    // connection
    include "dbconn.php";

    // connection maken
    $conn = makeConnectionWithDatabase();

    // check if song is existing
    $getSql = "select * from user where firstname like '$firstname' and lastname like '$lastname'";
    $users = getQuery($conn, $getSql);

    // insert query
    if (sizeof($users) > 0) {
        echo "User already exists";
    } else {
        insertQuery($conn, "INSERT INTO user (firstname, lastname, age, gender, interests, animal) VALUES ('$firstname', '$lastname', $age, '$gender', '$interests', '$animal');");

        header("Location: http://localhost:8888/succesfull.php"); // redirect
    }

    // connection closed
    $conn->close();