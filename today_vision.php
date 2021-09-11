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
                <div id="single-date">
                    <label>Date</label>

                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" id="date-val">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <!-- <div id="date-range" style="display:none">
                    <label>From:</label>
                    &nbsp;<a href="#" id="date-range-click-show-single-date">Click to single Date </a>
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" id="date-val">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    <label>To</label>
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" id="date-val">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div> -->
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
                            <button class="pull-right" type="button" data-toggle="modal" data-target="#myModal">Export</button>
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Attendance Reports Generator</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php' ?>