<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <link href="./style.css" rel="stylesheet"><!-- Style Page -->
    <link href="./respon.css" rel="stylesheet" type="text/css"><!-- Style Page -->

    <style>
        .menubar {
            padding-left: 20px;
            color: white;
        }

        .text-color {
            color: white;
        }
    </style>
</head>

<!-- MDB -->

<body>
    <div name="HNavbar">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #505050; ">
            <div class="container-fluid">
                <a class="navbar-brand font-nav" style="color: white;" href="./index.php">
                    <h4>Heart Rate Data</h4>
                </a>
            </div>
        </nav>
        <br>
    </div>

    <div class="data sticky-top">
        <div class="row ">
            <div class="col col_regis_Res"></div>
            <div class="col ">
                
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <form class="styform" name="form_add" action="./php/insert_user.php" method="POST">
                                <h1>Register</h1><br>
                                <!-- User -->
                                <div class="row mb">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="user" placeholder="username" onblur="check_user()" required>
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="row mb">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" placeholder="password" onblur="check_pass()" required>
                                    </div>
                                </div>
                                <!-- First Name -->
                                <div class="row mb">
                                    <label class="col-sm-3 col-form-label">ชื่อ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="fname" placeholder="ชื่อ" onblur="check_name()" required>
                                    </div>
                                </div>
                                <!-- Last Name -->
                                <div class="row mb">
                                    <label class="col-sm-3 col-form-label">นามสกุล</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="lname" placeholder="นามสกุล" onblur="check_lastname()" required>
                                    </div>
                                </div>
                                <!-- gender -->
                                <div class="row mb">
                                    <label class="col-sm-3 col-form-label">เพศ</label>
                                    <div class='col-sm-4' style='margin-left: 30px;'>
                                        <div class='form-check form-check-inline'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio1' value='ชาย'>
                                            <label class='form-check-label' for='inlineRadio1'>ชาย</label>
                                        </div>
                                        <div class='form-check form-check-inline' style='margin-left: 30px;'>
                                            <input class='form-check-input' type='radio' name='gender' id='inlineRadio2' value='หญิง'>
                                            <label class='form-check-label' for='inlineRadio2'>หญิง</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Date -->
                                <div class="row mb-3">

                                    <label for="birth_date" class="col-sm-3 col-form-label">วัน-เดือน-ปีเกิด</label>
                                    <div class="col-sm-5 has-validation">
                                        <input type="date" id="birthday" class="form-control" name="bdate">
                                    </div>

                                </div>

                                <!-- Age -->
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">อายุ</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="age">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"><button type="submit" class="btn btn-success" style="width: 100%;">ยืนยัน</button></div><p></p>
                                    <div class="col"><a href="login.php" class="btn btn-danger" style="width: 100%;">ยกเลิก</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                
            </div>
            <div class="col col_regis_Res"></div>
        </div>
    </div>
    <br>
</body>

</html>