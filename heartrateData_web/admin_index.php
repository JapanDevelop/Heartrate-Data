<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <!-- PDF CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- PDF -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
    <script src="./js/vfs_fonts.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin='anonymous'></script>




    <link href="./style.css" rel="stylesheet"><!-- Style Page -->
</head>


<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light position-relative" style="background-color: #505050;">
            <div class="container-fluid">
                <a class="navbar-brand font-nav" style="color: white;" href="./index.php">
                    <h4>Heart Rate Data</h4>
                </a>
                <span class="navbar-text" style="color: white;">
                    <?php
                    session_start();
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



    <div class="data">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h3>จัดการข้อมูลผู้ใช้</h3>
                        <span style="margin-left: 50px">สามารถลบหรือแก้ไขข้อมูลผู้ใช้ได้</span>
                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered display responsive nowrap" id="usertable" style="width:100%">
                                <thead style="background-color: #505050; color:white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>เพศ</th>
                                        <th>วันเดือนปีเกิด</th>
                                        <th>อายุ</th>
                                        <th>วันที่สมัคร</th>
                                        <th>แก้ไขข้อมูล</th>
                                        <th>ลบข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once './php/conn.php';
                                    $user = $_SESSION["usersess"];

                                    $usersql = "SELECT * FROM userheartrate WHERE level != 'admin' ";
                                    $result = mysqli_query($conn, $usersql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr id="<?php echo $row['username']; ?>">
                                                <td> <?php echo $row['id']; ?> </td>
                                                <td> <?php echo $row['username']; ?> </td>
                                                <td> <?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
                                                <td> <?php echo $row['gender']; ?></td>
                                                <td> <?php echo $row['bdate']; ?></td>
                                                <td> <?php echo $row['age']; ?></td>
                                                <td> <?php echo $row['date']; ?></td>
                                                <td><a class='btn btn-primary' href='./admin_userdata.php?id=<?php echo $row['id'] ?>&user=<?php echo $row['username'] ?>'><img src="./Image/edit2.png" style='font-size:16px'></a></td>
                                                <td><button class="btn btn-danger remove"><img src="./Image/bin2.png" style='font-size:16px'></button></td>
                                            </tr>
                                    <?php    }
                                    } else {
                                        echo "<p>Database not found !!</p>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>

            <script type="text/javascript" language="javascript">
                $(document).ready(function() {
                    $('#usertable').DataTable({
                        responsive: true
                    });
                });

                $(".remove").click(function() {

                    var username = $(this).parents("tr").attr("id");


                    if (confirm('Are you sure to remove this record ?')) {
                        $.ajax({
                            url: './php/admin_delete.php',
                            type: 'GET',
                            data: {
                                user: username
                            },
                            error: function() {
                                alert('Something is wrong');
                            },
                            success: function(data) {
                                $("#" + username).remove();
                                alert("Record removed successfully");
                            }
                        });
                    }
                });
            </script>

</body>

</html>