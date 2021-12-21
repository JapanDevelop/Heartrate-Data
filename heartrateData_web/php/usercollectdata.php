<?php
    session_start();
    require_once 'conn.php';

    $username = $_SESSION["usersess"];

    date_default_timezone_set("Asia/Bangkok");

    
    $date = date('Y-m-d');
    $time = date('H:i:s');

    echo $date;

    $sql = "UPDATE `hrdata` SET `username`= '$username' WHERE username = ''" ;
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo "Complete";
        header("Location: ../index.php");
    }else{
        echo "error";
    }
?>