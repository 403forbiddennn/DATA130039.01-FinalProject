<<?php
    $link = mysqli_connect('localhost','root','qazokm1029');
    if (!$link) {echo "Error: Unable to connect to MySQL." . PHP_EOL; echo "Debugging errn: " . mysqli_connect_errno() . PHP_EOL; echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; exit;
    }
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,'database_project');
    $sql = "select * from labelbase;";
    //echo $sql1;
    $record = mysqli_query($link, $sql);
    $genres = array();
    while($row = mysqli_fetch_array($record)){
        $genres[]=$row;
    }
    require("find_by_genre.html");
?>