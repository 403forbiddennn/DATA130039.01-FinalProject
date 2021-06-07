<?php
    $link = mysqli_connect('localhost','root','qazokm1029');
    if (!$link) {echo "Error: Unable to connect to MySQL." . PHP_EOL; echo "Debugging errn: " . mysqli_connect_errno() . PHP_EOL; echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; exit;
    }
    mysqli_query($link,"set names utf8");
    mysqli_select_db($link,'database_project');
    $test = $_GET["id"];
    $sql1 = "select * from people where doubanid_person=$test;";
    $record = mysqli_query($link, $sql1);
    $row = mysqli_fetch_row($record);
    list($doubanid_person, $birthday, $imdb_id, $name, $img) = $row;  // 记录人员信息
    // 以下是看该人是不是演员
    $sql2 = "select actor.doubanid_film, film.Name, film.name2 from actor,film where actor.doubanid_person = $test and actor.doubanid_film=film.doubanid;";
    $result2 = mysqli_query($link, $sql2); 
    $actor_film = array();
    if(mysqli_num_rows($result2)>=1){
        while($temp = mysqli_fetch_array($result2)){
            $actor_film[] = $temp;
        }
    }
    // 以下是看人是不是导演
    $sql3 = "select director.doubanid_film, film.Name, film.name2 from director, film where director.doubanid_person = $test and director.doubanid_film=film.doubanid;";
    $result3 = mysqli_query($link, $sql3);
    $director_film = array();
    if(mysqli_num_rows($result3)>=1){
        while($temp = mysqli_fetch_array($result3)){
            $director_film[] = $temp;
        }
    }
    // 以下是看该人是不是author
    $sql4 = "select author.doubanid_film, film.Name, film.name2 from author, film where author.doubanid_person = $test and author.doubanid_film=film.doubanid;";
    $result4 = mysqli_query($link, $sql4);
    $author_film = array();
    if(mysqli_num_rows($result4)>=1){
        while($temp = mysqli_fetch_array($result4)){
            $author_film[] = $temp;
        }
    }
    // print_r($actor_film);
    require('specific_people.html');
?>