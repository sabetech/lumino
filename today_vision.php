<?php include_once 'includes/header.php' ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Today's Attendance</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vision Lectures Attendance</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-xs-6 col-md-3 col-lg-3" style="padding: 2em;">
                <label>Date</label>
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control" id="date-val">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body tabs">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a href="#pilltab1" data-toggle="tab">Present for Vision Lecture</a>
                            </li>
                            <li class="">
                                <a href="#pilltab2" data-toggle="tab">Late for Vision Lecture</a>
                            </li>
                            <li class="">
                                <a href="#pilltab3" data-toggle="tab">Absent for Vision Lecture</a>
                            </li>
                            <li class="pull-right active"><a id="vision_export" href="">Export</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="pilltab1">
                                <table class="table" id="vision-lecture-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Index Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Index Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="tab-pane fade in" id="pilltab2">
                                <table class="table" id="vision-lecture-table-late">
                                    <thead>
                                        <tr>
                                            <th scope="col">Index Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Index Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Batch</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="tab-pane fade in" id="pilltab3">
                                <table class="table" id="vision-lecture-table-absentees">
                                    <thead>
                                        <tr>
                                            <th scope="col">Index Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Batch</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Index Number</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Batch</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.panel-->
            </div><!-- /.col-->
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php' ?>