<?php

    require 'database.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];

    $veteran = 'FALSE';
    if (isset($_POST['veteranstatus'])) {
        $veteran = 'TRUE';
    }

    $mental = 'FALSE';
    if (isset($_POST['mentalstatus'])) {
        $mental = 'TRUE';
    }

    $dob = $_POST['dob'];
    $ethnicity = $_POST['ethnicity'];
    $race = $_POST['race'];

    $stmt = $mysqli->prepare('INSERT INTO MainInfo (firstname, lastname, number, gender, veteran, mental, dob, ethnicity, race) VALUES (?,?,?,?,?,?,?,?,?) ');
    if (!$stmt) {
        printf("Query Prep Failed: %s\n", $mysqli->error);
        exit;
    }
    $stmt->bind_param('sssssssss', $firstname, $lastname, $number, $gender, $veteran, $mental, $dob, $ethnicity, $race);
    $stmt->execute();

?>


