<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance - Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/theme-rose.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.24/b-1.7.0/date-1.0.3/r-2.2.7/rr-1.2.7/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" />


    <style>
        .spin-big {
            font-size: xxx-large;
        }
    </style>

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>ABMTC</span>Attendance</a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"> - Admin</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li class=""><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li class=""><a href="reg_students.php"><em class="fa fa-list-alt">&nbsp;</em> Registered Students</a></li>
            <li class=""><a href="today_vision.php"><em class="fa fa-television">&nbsp;</em> Vision Lectures</a></li>
            <li class=""><a href="today_pillar.php"><em class="fa fa-youtube-play">&nbsp;</em> Pillar Lectures</a></li>
            <li class=""><a href="today_bmcdr.php"><em class="fa fa-cog">&nbsp;</em> BMCDR</a></li>
            <li class=""><a href="today_wog.php"><em class="fa fa-circle">&nbsp;</em> Waiting on God</a></li>
            <li class=""><a href="anagkazo_live.php"><em class="fa fa-fire">&nbsp;</em> Anagkazo Live</a></li>
        </ul>
    </div>
    < <!--/.sidebar-->