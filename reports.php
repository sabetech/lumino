<?php include_once 'includes/header.php' ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Attendance</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Attendance Reports</h1>
        </div>
    </div>
    <!--/.row-->
    <form method="POST" action="https://anagkazo.firstlovegallery.com/api/anagkazo/attendance/reports">
        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-5 col-lg-5" style="padding: 2em;">
                    <div id="date-range">
                        <label>From:</label>
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" name="fromdate" class="form-control date-range" id="date-val-from">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                        <label>To</label>
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" name="todate" class="form-control date-range" id="date-val-to">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="all-time" name="frombeginning"> From The Beginning to Date
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div style="padding: 1em;">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="calculate-point" name="calculate_point"> Calculate Points
                                </label>
                            </div>
                        </div>

                        <div>
                            <div class="dropdown">
                                <select class="form-control" name="event">
                                    <option>Vision Lectures</option>
                                    <option>Pillar Lectures</option>
                                    <option>BMCDR</option>
                                    <option>Waiting on God</option>
                                    <option>Anagkazo Live</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--/.panel-->
                </div><!-- /.col-->
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div>
                            <div class="dropdown">
                                <select class="form-control" id="classes" name="classes">
                                    <option id="all">All Classes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--/.panel-->
                </div><!-- /.col-->
                <button style="float:right;margin:20px" type="submit">Export</button>
            </div>
        </div>
    </form>
    <?php include_once 'includes/footer.php' ?>