<?php
    $link = mysqli_connect('localhost','root','qazokm1029');
    if (!$link) {echo "Error: Unable to connect to MySQL." . PHP_EOL; echo "Debugging errn: " . mysqli_connect_errno() . PHP_EOL; echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; exit;
    }
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,'database_project');
    $test = $_GET["id"];
    $sql = "select film.doubanid, film.Name, film.name2, film.year, film.rating, film.len from film, genre where genre='$test' and genre.doubanid=film.doubanid order by rating DESC;";
    $result = mysqli_query($link, $sql);
    //echo $sql1;
    $records = array();
    while ($record = mysqli_fetch_array($result)){
        $records[] = $record;
        }
    array_multisort(array_column($records, 'rating'), SORT_DESC, $records);
    // print_r($records);
    require('TopClassified.html');
?>