<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="./style.css" rel="stylesheet"><!-- Style Page -->
    <link href="./respon.css" rel="stylesheet" type="text/css"><!-- Style Page -->

    <style>
        .login_res {
            margin: auto;
        }

        .form-label {
            padding: 5px;
        }

        .loginButton {
            margin-top: 10px;
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
            </div>
        </nav>
        <br>
    </div>

    <div class="loginform">
        <div class="row">
            <div class="col col_login_res"></div>
            <div class="col">
                <div class="login_res">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body ">
                            <h1>Sign In</h1>
                            <form name="form_login" action="./php/check_login.php" method="POST">
                                <label class="form-label" for="usercheck">Username</label>
                                <div class="form-group has-validation">
                                    <input type="text" class="form-control" id="usercheck" name="user" required>
                                </div>

                                <label for="form-label" for="passwordcheck">Password</label>
                                <div class="form-group has-validation">
                                    <input type="password" class="form-control" id="passwordcheck" name="password" required>
                                </div>

                                <button type="submit" class="btn btn-primary loginButton">Login</button>
                                <p class="signuptext">Don't have an account ? <a href="./regis.php">Sign Up</a> or <a href="reset_pass.php">Forgot Password ?</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col_login_res"></div>
        </div>
    </div>
    <br>
    
</body>

</html>