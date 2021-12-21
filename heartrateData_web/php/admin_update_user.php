<?php
    session_start();
    require_once './conn.php';

    $username = $_POST['user_name'];
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $gder = $_POST['gender'];
    $date = $_POST['bdate'];
    $age = $_POST['age'];

    $sql = "UPDATE userheartrate SET fname = '$name', lname = '$lname', gender = '$gder', bdate = '$date', age = '$age' WHERE username = '$username' ";

    if (mysqli_query($conn, $sql)){
        header("Location: ../admin_userdata.php?user=$username");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }


    mysqli_close($conn);
?>