<!DOCTYPE html>
<html>

<head>
    <title>Password Reset</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="./style.css" rel="stylesheet"><!-- Style Page -->
    <link href="./respon.css" rel="stylesheet" type="text/css"><!-- Style Page -->

    <style>
        .loginform {
            margin: auto;
        }

        .form-label {
            padding: 5px;
        }

        .loginButton {
            margin-top: 10px;
            margin-left: 5px;
            float: right;
            width: 150px;
        }

        .signuptext {
            margin: 5px;
        }

        .navbarlogin {
            padding-bottom: 5px;
        }
    </style>
</head>



<body>
    <div>
        <nav class="navbarlogin navbar navbar-expand-lg navbar-light position-relative" style="background-color: #505050; ">
            <div class="container-fluid">
                <a class="navbar-brand font-nav" style="color: white;" href="./index.php">
                    <h4>Heart Rate Data</h4>
                </a>
                <span class="navbar-text" style="color: white;"></span>

            </div>
        </nav>
        <br>
    </div>

    <div class="loginform ">
        <div class="row">
            <div class="col col_reser_res"></div>
            <div class="col">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card-body ">
                        <h1>Password Reset</h1>
                        <form name="form_login" action="./php/pass_reset_chk.php" method="POST">
                            <label class="form-label" for="usercheck">Username</label>
                            <div class="form-group has-validation">
                                <input type="text" class="form-control" id="usercheck" name="user" required>
                            </div>

                            <label for="form-label" for="passwordcheck">Password</label>
                            <div class="form-group has-validation">
                                <input type="password" class="form-control" id="passwordcheck" name="password" required>
                            </div>

                            <label for="form-label" for="passwordcheck">Confirm Password</label>
                            <div class="form-group has-validation">
                                <input type="password" class="form-control" id="Confirmpasswordcheck" name="Confirmpassword" required>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col"><button type="submit" class="btn btn-success" style="width: 100%;">Confirm</button></div>
                                <p></p>
                                <div class="col"><input type="button" value="Cancel" class="btn btn-danger" style="width: 100%;" onClick="document.location.href='login.php';" /></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col col_reser_res"></div>
        </div>
    </div>
    <br>
</body>

</html>