<?php
ob_start();
session_start();
?>
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

    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <link href="./respon.css" rel="stylesheet" type="text/css"><!-- Style Page -->
    <link href="./style.css" rel="stylesheet"><!-- Style Page -->

    <style>
        .thright {
            margin-left: -1px;
        }

        .displaymodal {
            display: none;
        }

        .getstartbutton {
            display: none;
        }

        .Bcontain {
            margin-top: -10px;
            margin-bottom: 10px;
        }

        @media only screen and (max-width: 1024px) {
            .displaydata {
                display: none;
            }

            .getstart {
                display: none;
            }

            .displaymodal {
                display: block;
                margin-left: 5px;

            }

            .getstartbutton {
                display: block;
                margin-right: 5px;
            }
        }

        @media only screen and (max-width: 500px) {
            .displaydata {
                display: none;
            }

            .getstart {
                display: none;
            }

            .displaymodal {
                display: block;
                margin-left: 5px;

            }

            .getstartbutton {
                display: block;
                margin-right: 5px;
            }


        }

        @media only screen and (max-width: 400px) {
            .displaydata {
                display: none;
            }

            .getstart {
                display: none;
            }

            .displaymodal {
                display: block;
                margin-left: 5px;

            }

            .getstartbutton {
                display: block;
                margin-right: 5px;
            }

        }
    </style>
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
                    if (!$_SESSION["usersess"] && !$_SESSION["level"] == "member") {
                        header("Location: ./login.php");
                    } else if ($_SESSION["level"] == "member") {
                        //echo "Session Id :" . session_id() . "&nbsp;" . "&nbsp;";
                        echo "<lable class=font_bold>ชื่อผู้ใช้ : " . $_SESSION["usersess"] . "</label>" . "&nbsp;" . "&nbsp;";
                        echo "<lable ><a href=./logout.php class='navbar-light'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-box-arrow-right logout' viewBox='0 0 16 16' alt='Logut'>
                        <path fill-rule='evenodd' d='M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z'/>
                        <path fill-rule='evenodd' d='M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z'/>
                      </svg></a></lable>";
                    } else {
                        header("Location: ./admin_index.php");
                    }
                    ?>
                </span>
            </div>
        </nav>
        <br>
    </div>

    <div class="Bcontain">
        <div class="row">
            <div class="col">
                <div class="displaymodal">
                    <button type="button" class="btn btn-secondary" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#infosample">
                        ข้อมูลส่วนตัว
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="infosample" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ข้อมูลส่วนตัว</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table display responsive nowrap" style="width:100%">
                                        <tbody>
                                            <?php
                                            require_once './php/conn.php';


                                            $usersql = "SELECT * FROM userheartrate WHERE username = '$user' ";
                                            $result = mysqli_query($conn, $usersql);

                                            if (mysqli_num_rows($result) > 0) {
                                                if ($row = mysqli_fetch_assoc($result)) {
                                                    //echo "<tr><th class ='thright' id='userdata'>user : </th>" . "<td>" . $row['username'] . "</td>" . "</tr>";
                                                    echo "<tr><th class ='thright'>ชื่อ : </th>" . "<td>" . $row['fname'] . "</td>" . "</tr>";
                                                    echo "<tr><th class ='thright'>นามสกุล : </th>" . "<td>" . $row['lname'] . "</td>" . "</tr>";
                                                    echo "<tr><th class ='thright'>เพศ : </th>" . "<td>" . $row['gender'] . "</td>" . "</tr>";
                                                    echo "<tr><th class ='thright'>วันเดือนปีเกิด : </th>" . "<td>" . $row['bdate'] . "</td>" . "</tr>";
                                                    echo "<tr><th class ='thright'>อายุ : </th>" . "<td>" . $row['age'] . "</td>" . "</tr>";
                                                    echo "<tr><th class ='thright'>วันที่สมัคร : </th>" . "<td>" . $row['date'] . "</td>" . "</tr>";
                                                }
                                            } else {
                                                echo "<p>Database not found !!</p>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="button" value="แก้ไขข้อมูล" class="btn btn-primary" onClick="document.location.href='edit_user.php?user=<?php echo $row['username']; ?>'" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="getstartbutton">
                    <button type="button" class="btn btn-secondary" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#getstartguid">
                        ข้อแนะนำ
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="getstartguid" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ขั้นตอนการใช้งานสำหรับการลงชื่อเข้าใช้งานครั้งแรก</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ol>
                                        <li>ให้ทำการวัดค่าอัตราการเต้นหัวใจที่เครื่องก่อน</li>
                                    </ol>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="data">
        <div class="row ">
            <div class="col-sm-2">
                <div class="userinfo card displaydata">
                    <h4 style="text-align: center; margin: 5px 0px">ข้อมูลส่วนตัว</h4>
                    <br>
                    <div class="infouserindex">
                        <div class="table-responsive">
                            <table class="table table-striped responsive" style="width:100%">
                                <tbody>
                                    <?php
                                    require_once './php/conn.php';
                                    $user = $_SESSION["usersess"];

                                    $usersql = "SELECT * FROM userheartrate WHERE username = '$user' ";
                                    $result = mysqli_query($conn, $usersql);

                                    if (mysqli_num_rows($result) > 0) {
                                        if ($row = mysqli_fetch_assoc($result)) {
                                            //echo "<tr><th class ='thright' id='userdata'>user : </th>" . "<td>" . $row['username'] . "</td>" . "</tr>";
                                            echo "<tr><th class ='thright'>ชื่อ : </th>" . "<td>" . $row['fname'] . "</td>" . "</tr>";
                                            echo "<tr><th class ='thright'>นามสกุล : </th>" . "<td>" . $row['lname'] . "</td>" . "</tr>";
                                            echo "<tr><th class ='thright'>เพศ : </th>" . "<td>" . $row['gender'] . "</td>" . "</tr>";
                                            echo "<tr><th class ='thright'>วันเดือนปีเกิด : </th>" . "<td>" . $row['bdate'] . "</td>" . "</tr>";
                                            echo "<tr><th class ='thright'>อายุ : </th>" . "<td>" . $row['age'] . "</td>" . "</tr>";
                                            echo "<tr><th class ='thright'>วันที่สมัคร : </th>" . "<td>" . $row['date'] . "</td>" . "</tr>";
                                        }
                                    } else {
                                        echo "<p>Database not found !!</p>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <input type="button" value="แก้ไขข้อมูลส่วนตัว" class="btn btn-primary" onClick="document.location.href='edit_user.php';" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card table_body" style="margin: auto ;">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col">
                                <h3>ข้อมูลอัตราการเต้นหัวใจ</h3>
                                <span>*หมายเหตุ ข้อมูลที่แสดงมาจากเซนเซอร์จะต้องทำการกดปุ่มบันทึก เพื่อที่เก็บข้อมูลไปยังชื่อผู้ใช้</span>
                            </div>
                        </div>
                        <br>
                        <table class="table table-striped table-bordered" id="hrtable" width=100%>

                            <thead style="background-color: #505050; color:white">
                                <tr>
                                    <th scope="col-2">Heart Rate (AVG BPM)</th>
                                    <th scope="col-2">Date (D-MM-Y)</th>
                                    <th scope="col-2">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $usernamedata = $row['username'];
                                $name  = $row['fname'];
                                $lname  = $row['lname'];
                                $gender = $row['gender'];
                                $age = $row['age'];
                                $bdate = $row['bdate'];
                                $date = $row['date'];

                                $sqldata = "SELECT * FROM hrdata where (username = '$usernamedata' || username = '') && status = 'active'"; //username = '$usernamedata' OR username = '' 
                                $resultdata = mysqli_query($conn, $sqldata);

                                if (mysqli_num_rows($resultdata) > 0) {
                                    $updateAuto = "UPDATE hrdata set username = '$usernamedata' where username ='' && status = 'active'";
                                    if(mysqli_query($conn, $updateAuto)){
                                        while ($rowdata = mysqli_fetch_assoc($resultdata)) {
                                            //echo "<><td>" . $rowdata['id'] . "</td>";
                                            echo "<td>" . $rowdata['hr'] . "</td>";
                                            echo "<td>" . $rowdata['dateBPM'] . "</td>";
                                            echo "<td>" . $rowdata['timeBPM'] . "</td>";
                                            echo "</tr>";
                                            //echo "<td>" . $rowdata['username'] . "</td>";
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <script type="text/javascript" language="javascript">
                    pdfMake.fonts = {
                        THSarabun: {
                            normal: 'THSarabun.ttf',
                            bold: 'THSarabun-Bold.ttf',
                            italics: 'THSarabun-Italic.ttf',
                            bolditalics: 'THSarabun-BoldItalic.ttf'
                        }
                    }

                    var dataTable = $('#hrtable').DataTable({
                        "paging": true,
                        "autoWidth": true,
                        "searching": true,
                        pageLength: 10,
                        lengthMenu: [
                            [10, 25, 50, -1],
                            [10, 25, 50, "All"]
                        ],
                        "pagingType": "full_numbers",
                        dom: 'B<"clear">lfrtip',
                        "buttons": [{
                                extend: 'pdfHtml5',
                                text: '<i class="fa fa-file-pdf-o"> PDF</i>',
                                titleAttr: 'PDF',
                                pageSize: 'A4',
                                exportOptions: {
                                    columns: ':visible',
                                    search: 'applied',
                                    order: 'applied'
                                },
                                title: 'Heart Rate Data Report',
                                messageTop: [{
                                        text: '<?php echo "ชื่อ-นามสกุล : "; ?>',
                                        bold: true
                                    },
                                    {
                                        text: '<?php echo $name . " " . $lname; ?>'
                                    },
                                    {
                                        text: '\n<?php echo "เพศ : "; ?>',
                                        bold: true
                                    },
                                    {
                                        text: '<?php echo $gender . " "; ?>\t'
                                    },
                                    {
                                        text: '<?php echo "อายุ : "; ?>',
                                        bold: true
                                    },
                                    {
                                        text: '<?php echo $age; ?>'
                                    },
                                    {
                                        text: '\n<?php echo "วันที่เกิด : "; ?>',
                                        bold: true
                                    },
                                    {
                                        text: '<?php echo $bdate; ?>'
                                    },
                                ],

                                customize: function(doc) { // ส่วนกำหนดเพิ่มเติม ส่วนนี้จะใช้จัดการกับ pdfmake
                                    // กำหนด style หลัก
                                    doc.defaultStyle = {
                                        font: 'THSarabun',
                                        fontSize: 20,

                                    };

                                    //doc.content.splice(0, 1);
                                    doc.styles.title.fontSize = 25;
                                    doc.styles.table = {
                                        alignment: 'center',
                                        width: '100%',
                                    };

                                    doc.defaultStyle.alignment = 'center';
                                    doc.pageMargins = [210, 20, 150, 20];

                                }
                            },

                            {
                                extend: 'csv',
                                text: '<i class="fa fa-file-text-o"> CSV</i>',
                                titleAttr: 'CSV',
                            },
                            {
                                extend: 'print',
                                title: 'Heart Rate Data Report',
                                messageTop: '<?php echo "ชื่อ-นามสกุล : " . $name . " " . $lname . "<br>"; ?><?php echo "เพศ : " . $gender . "<br>"; ?><?php echo "อายุ : " . $age . "<br>"; ?><?php echo "วันที่เกิด : " . $bdate . "<br>"; ?>',

                                function(win) {
                                    $(win.document.body).find('h1').css('text-align', 'center');
                                    $(win.document.body).css('font-size', '16px', 'center');
                                    $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                                }
                            },
                        ]
                    });
                </script>
            </div>
            <div class="col-sm-2">
                <div class="card getstart" id="getstartguid" style="margin-right: 15px ;">
                    <div class="card-body ">
                        <h4>ขั้นตอนการใช้งานสำหรับการลงชื่อเข้าใช้งานครั้งแรก</h4>
                        <ol>
                            <li>ให้ทำการวัดค่าอัตราการเต้นหัวใจที่เครื่องก่อน</li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>