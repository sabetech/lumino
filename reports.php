<?php include_once 'includes/header.php' ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Reports</li>
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
                    <h3>Generate Attendance Report</h3>
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
                                    <option value="VISION_IN">Vision Lectures</option>
                                    <option value="PILLAR_IN">Pillar Lectures</option>
                                    <option value="BMCDR_IN">BMCDR</option>
                                    <option value="WOG_IN">Waiting on God</option>
                                    <option value="ANAGKAZO_LIVE_IN">Anagkazo Live</option>
                                    <option value="FOUNDATIONAL_IN">Foundational Lectures</option>
                                    <option value="TUTORIAL_IN">Tutorials</option>
                                    <option value="4AM_PRAYERS_IN">4AM Prayer</option>
                                    <option value="SUNDAY_SERVICE_IN">Sunday Service</option>
                                    <option value="ANAGKAZO_ENCOUNTER_SERVICE_IN">Anagkazo Encounter Service</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <label>
                        <input type="checkbox" id="use-timestamps" name="usetimestamps"> Use Timestamps
                    </label>
                    <!--/.panel-->
                </div><!-- /.col-->
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div>
                            <div class="dropdown">
                                <select class="form-control classes" id="classes" name="classes">
                                    <option value="all">All Classes</option>
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

    <form method="POST" action="https://anagkazo.firstlovegallery.com/api/anagkazo/attendance/reports/percentages">
        <div class="panel panel-container">

            <div class="row">
                <div class="col-xs-6 col-md-5 col-lg-5" style="padding: 2em;">
                    <h3>Generate Attendance Percentages</h3>
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

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div>
                            <div class="dropdown">
                                <select class="form-control" name="event">
                                    <option value="VISION_IN">Vision Lectures</option>
                                    <option value="PILLAR_IN">Pillar Lectures</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div>
                            <div class="dropdown">
                                <select class="form-control classes" id="classes" name="classes">
                                    <option value="all">All Classes</option>
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