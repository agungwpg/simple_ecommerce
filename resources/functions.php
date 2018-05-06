<?php

function redirect($location){
    header("Location: $location");
}

function query($sql){
    global $conncetion;
    return mysqli_query($conncetion, $sql);
}

function confirm($result){
    global $conncetion;
    if(!$result){
        die("QUERY FAILED".mysqli_error($conncetion));
    }
}

function escape_string($string){
    global $conncetion;
    return mysqli_real_escape_string($conncetion,$string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}
?>