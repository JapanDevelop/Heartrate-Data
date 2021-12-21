<?php
    require_once './conn.php';

    $username_data = $_GET['user'];

    echo $username_data;

    $sql_delete_user = "DELETE FROM userheartrate WHERE username = '$username_data' ";
    $sql_delete_hr = "DELETE FROM hrdata WHERE username = '$username_data'";
    
    
    if (mysqli_query($conn, $sql_delete_user) && mysqli_query($conn, $sql_delete_hr)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    


    


?>


