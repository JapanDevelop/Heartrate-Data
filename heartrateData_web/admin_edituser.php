<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title>Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"><!-- Style Page -->
    <style>
        .container {
            width: 30%;
        }

        @media only screen and (max-width: 1024px) {
            .container {
                width: 100%;
            }
        }

        @media only screen and (max-width: 500px) {
            .container {
                width: 100%;
            }
        }

        @media only screen and (max-width: 400px) {
            .container {
                width: 100%;
            }
        }
    </style>
</head>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.23/af-2.3.5/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.js"></script>

<body>
    <div name="HNavbar">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #505050; ">
            <div class="container-fluid">
                <a class="navbar-brand font-nav" style="color: white;" href="./admin_index.php">
                    <h4>Heart Rate Data</h4>
                </a>
                <span class="navbar-text" style="color: white;">
                    <?php
                    if (!$_SESSION["usersess"]) {
                        header("Location: ./login.php");
                    } else {
                        //echo "Session Id :" . session_id() . "&nbsp;" . "&nbsp;";
                        echo "<lable class=font_bold>ชื่อผู้ใช้ : " . $_SESSION["usersess"] . "</label>" . "&nbsp;" . "&nbsp;";
                        echo "<lable ><a href=./logout.php class='navbar-light'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-box-arrow-right logout' viewBox='0 0 16 16' alt='Logut'>
                        <path fill-rule='evenodd' d='M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z'/>
                        <path fill-rule='evenodd' d='M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z'/>
                      </svg></a></lable>";
                    }

                    ?>
                </span>
            </div>
        </nav>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card userform">
                    <div class="card-body">
                        <?php
                        require_once './php/conn.php';

                        $custom = $_GET['user'];

                        $sql = "SELECT * FROM userheartrate WHERE username = '$custom' ";
                        $result = mysqli_query($conn, $sql);
                        $userinfo = mysqli_fetch_array($result);

                        extract($userinfo);

                        if (isset($id)) {
                            echo "<form class='styform' name='form_add' action='./php/admin_update_user.php' method='POST'>
                                <h2 class='Hinfo'>แก้ไขข้อมูลส่วนตัว</h2><br>
                                <input type='hidden' class='form-control' name='user_name' value = $custom>
                                <!-- First Name -->
                                <div class='row'>
                                    <label class='col col-form-label'>ชื่อ</label>
                                    <div class='col'>
                                        <input type='text' class='form-control' name='fname' onblur='check_name()' required value = $userinfo[fname]>
                                    </div>
                                </div>";

                            echo "<!-- Last Name -->
                                <div class='row mb'>
                                    <label class='col col-form-label'>นามสกุล</label>
                                    <div class='col'>
                                        <input type='text' class='form-control' name='lname' onblur='check_lastname()' required value = $userinfo[lname]>
                                    </div>
                                </div>";

                            if ($userinfo['gender'] == 'ชาย') {
                                echo "<!-- Gender -->
                                <div class='row mb'>
                                    <label class='col col-form-label'>เพศ</label>
                                    <div class='col' style='margin-left: 5px;'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio1' value='ชาย' echo checked>
                                            <label class='form-check-label' for='inlineRadio1'>ชาย</label>
                                        </div>
                                        <div class='form-check form-check-inline' style='margin-left: 5px;'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio2' value='หญิง'>
                                            <label class='form-check-label' >หญิง</label>
                                        </div>
                                    </div>
                                </div>";
                            } elseif ($userinfo['gender'] == 'หญิง') {
                                echo "<!-- Gender -->
                                <div class='row mb'>
                                    <label class='col col-form-label'>เพศ</label>
                                    <div class='col' style='margin-left: 5px;'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio1' value='ชาย' >
                                            <label class='form-check-label' for='inlineRadio1'>ชาย</label>
                                        </div>
                                        <div class='form-check form-check-inline' style='margin-left: 5px;'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio2' value='หญิง' echo checked>
                                            <label class='form-check-label'>หญิง</label>
                                        </div>
                                    </div>
                                </div>";
                            } else {
                                echo "<!-- Gender -->
                                <div class='row mb'>
                                    <label class='col col-form-label'>เพศ</label>
                                    <div class='col' style='margin-left: 5px;'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio1' value='ชาย'>
                                            <label class='form-check-label' for='inlineRadio1'>ชาย</label>
                                        </div>
                                        <div class='form-check form-check-inline' style='margin-left: 5px;'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio2' value='หญิง'>
                                            <label class='form-check-label' for='inlineRadio2'>หญิง</label>
                                        </div>
                                    </div>
                                </div>";
                            }

                            echo "<!-- Date -->
                                <div class='row mb'>
                                    <label class='col col-form-label'>วัน/เดือน/ปีเกิด</label>
                                    <div class='col has-validation'>
                                        <input type='date' class='form-control' name='bdate' value = $userinfo[bdate]>
                                    </div>
                                </div>";

                            echo "<!-- Age -->
                                <div class='row mb'>
                                    <label class='col col-form-label'>อายุ</label>
                                    <div class='col'>
                                        <input type='text' class='form-control' name='age' onblur='check_num()' required value = $userinfo[age]>
                                    </div>
                                </div>";
                        }
                        ?>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-success" style="width:100%; margin:auto;" value="Save"><br>
                            </div>
                            <div class="col">
                                <input type="button" value="Cancel" class="btn btn-danger" style="width:100%;" onClick="document.location.href='admin_userdata.php?user=<?php echo $custom ?>';" />
                            </div>

                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <br>
</body>

</html>