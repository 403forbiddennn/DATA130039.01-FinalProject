<?php
    $servername = "localhost";
    $username = "root";
    $password = "qazokm1029";
    $dbname = "database_project";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
    $name = $_GET["name"];
    $mail = $_GET["email"];
    $info = $_GET["message"];
    $sql = "INSERT INTO feedbackinfo(Name,Email,Information) VALUES('$name', '$mail', '$info')";
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    require("home.php");
?>