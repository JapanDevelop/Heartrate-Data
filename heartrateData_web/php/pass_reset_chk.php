<?php
    require_once 'conn.php';

    $usernamechk = $_POST['user'];
    $passwordchk = $_POST['password'];
    $Comfirm_passwordchk = $_POST['Confirmpassword'];

    if(!isset($usernamechk) && isset($passwordchk)){
        echo '<script language="javascript">';
        echo 'alert("กรุณากรอกข้อมูลให้ครบ")';
        echo '</script>';
    }else{
        if($passwordchk == $Comfirm_passwordchk){
            //echo "COmplete";
            $sql = "UPDATE userheartrate SET password = '$Comfirm_passwordchk' WHERE username = '$usernamechk'";
            if(mysqli_query($conn, $sql)){
                echo '<script language="javascript">';
                echo 'alert("เปลี่ยนรหัสผ่านเรียบร้อย");';
                echo 'document.location.href = "../index.php";';
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("userename ไม่ตรงกับระบบโปรดแก้ไข");';
                echo 'document.location.href = "../reset_pass.php";';
                echo '</script>';
            }
        }else{
            echo '<script language="javascript">';
            echo 'alert("โปรดกรอกรหัสผ่านให้ถูกต้อง");';
            echo 'document.location.href = "../reset_pass.php";';
            echo '</script>';
            
        }
        
    }
?>