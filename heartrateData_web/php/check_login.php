    <?php
    session_start();

    require_once 'conn.php';

    $useraccount = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM userheartrate WHERE username = '$useraccount'";

    $result = mysqli_query($conn, $sql);

    if ($cus = mysqli_fetch_array($result)) {
        if (!isset($useraccount, $password)) {
            exit('โปรดกรอกข้อมูลให้ครบ');
        } else if (($cus['username'] == $useraccount) && ($cus['password'] == $password)) {
            if ($cus['level'] == 'member') {
                $_SESSION['usersess'] = $cus['username'];
                $_SESSION['level'] = 'member';
                header("Location: ../index.php");
            } else if ($cus['level'] == 'admin') {
                $_SESSION['usersess'] = $cus['username'];
                $_SESSION['level'] = 'admin';
                header("Location: ../admin_index.php");
            }
        } else if (($useraccount != $cus['username']) || ($password != $cus['password'])) {
            echo "
            <script type='text/javascript'>
            function error_check() {
                alert('ไม่พบข้อมูลผู้ใช้');
                location.replace('../login.php');
            }
            </script>
            <html>
                <body onload='error_check()'>
                </body>
            </html>";
        } else if(($cus['username'] != $useraccount) || ($cus['password'] != $password)){
            echo "
                <script type='text/javascript'>
                function error_check() {
                    alert('Invalid Username or Password!!');
                    location.replace('../login.php');
                }
                </script>
                <html>
                    <body onload='error_check()'>
                    </body>
                </html>";
        }
    }


    session_write_close();
    ?>