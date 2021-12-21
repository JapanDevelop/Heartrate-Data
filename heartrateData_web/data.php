<?php
require_once './php/conn.php';

date_default_timezone_set("Asia/Bangkok");
$hrdata = $_GET['hrdata'];
$status = "active";
$date = date('Y-m-d');
$time = date('H:i:s');

echo $date."<br>".$time;

$sql = "INSERT INTO hrdata (hr,dateBPM,timeBPM,status) value ('".$hrdata."','".$date."','".$time."','".$status."')";

$sql_query = mysqli_query($conn,$sql);

    if ($sql_query) {
        echo "Complete";
    } else {
        echo "Error";
    }

    


    //header("Location: ../index.php");
?>