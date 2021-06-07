<?php
    $link = mysqli_connect('localhost','root','qazokm1029');
    if (!$link) {echo "Error: Unable to connect to MySQL." . PHP_EOL; echo "Debugging errn: " . mysqli_connect_errno() . PHP_EOL; echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; exit;
    }
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,'database_project');
    $sql = 'select * from film order by rating DESC limit 250';
    $result = mysqli_query($link,$sql);
    $records = array();
    while ($record = mysqli_fetch_array($result)){
        $records[] = $record;
    }
    array_multisort(array_column($records, 'rating'), SORT_DESC, $records);
    // print_r($records);
    require('TopRated.html');
?>