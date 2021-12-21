<?php
require_once 'conn.php';

$user = $_POST['user'];
$pass = $_POST['password'];
$name = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$date = $_POST['bdate'];

date_default_timezone_set("Asia/Bangkok");

$datebpm = date('Y-m-d');
$time = date('H:i:s');


echo "$user";
echo "$pass";
echo "$name";
echo "$lname";
echo "$age";
echo "$date";

//$calAge = (date('Y')-date('Y',strtotime($date))-1);

/*$sql = "CREATE TABLE `hr_data`.$user ( `id`  INT(50) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`),`username` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL,
    `fname` VARCHAR(100) NOT NULL , `lname` VARCHAR(100) NOT NULL ,`gender` VARCHAR(100) NOT NULL , `bdate` VARCHAR(100) NOT NULL , `age` INT(50) NOT NULL , `bpm` VARCHAR(255) NOT NULL , `timebpm` TIMESTAMP NOT NULL )";
    */

//echo "New records created successfully";
$sqladd = "INSERT INTO userheartrate (username,password,fname, lname, gender, bdate, age,date,time,level)  
                            value('" . $user . "','" . $pass . "','" . $name . "','" . $lname . "','" . $gender . "','" . $date . "','" . $age . "','" . $datebpm . "','" . $time . "','member')";
if (mysqli_query($conn, $sqladd)) {
  header("Location: ../login.php");
  //echo "New Data Add successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
