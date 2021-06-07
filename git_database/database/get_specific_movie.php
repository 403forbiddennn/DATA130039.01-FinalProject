<?php
    $link = mysqli_connect('localhost','root','qazokm1029');
    if (!$link) {echo "Error: Unable to connect to MySQL." . PHP_EOL; echo "Debugging errn: " . mysqli_connect_errno() . PHP_EOL; echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; exit;
    }
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,'database_project');
    $test = $_GET["id"];
    $sql1 = "select * from film where doubanid=$test";
    //echo $sql1;
    $record = mysqli_query($link, $sql1);
    // if(mysqli_num_rows($record) < 1){
    //     exit("该电影不存在或输入完整的电影名！");
    // }
    //if ($record == false) echo "error";
    while($row = mysqli_fetch_row($record)){
        list($doubanid, $Name, $name2, $rating, $year, $desc, $len, $img) = $row;
    }
    // 找到电影的演员及其对应的角色
    $sql2 = "select actor.doubanid_person, actor.name, people.name from actor, people where actor.doubanid_film = $doubanid and actor.doubanid_person = people.doubanid_person";
    $result2 = mysqli_query($link, $sql2);
    $record2 = array();
    while($temp = mysqli_fetch_array($result2)){
        $record2[] = $temp;
    }
    // 找到电影的导演
    $sql3 = "select * from director where doubanid_film=$test;";
    $result3 = mysqli_query($link, $sql3);
    $director_record = array();
    while($temp = mysqli_fetch_array($result3)){
        $director_record[] = $temp;
    }
    //找到电影的编剧
    $sql4 = "select * from author where doubanid_film=$test;";
    $result4 = mysqli_query($link, $sql4);
    $author_record = array();
    while($temp = mysqli_fetch_array($result4)){
        $author_record[] = $temp;
    }
    // 找到电影的类别
    $sql5 = "select * from genre where doubanid=$test;";
    $result5 = mysqli_query($link, $sql5);
    $genre_record = array();
    while($temp = mysqli_fetch_array($result5)){
        $genre_record[] = $temp;
    }
    // $sql4 = "select * from author where"
    require('Specific_Movie.html');
?>