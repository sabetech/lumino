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
            <h1 class="page-header">Anagkazo Live Attendance</h1>
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
                            <li class="active"><a href="#pilltab1" data-toggle="tab">Present for Anagkazo Live</a></li>
                            <li class=""><a id="anagkazo_live_export" href="">Export</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="pilltab1">
                                <table class="table" id="anagkazo_live-table">
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

                        </div>
                    </div>
                </div>
                <!--/.panel-->
            </div><!-- /.col-->
        </div>
    </div>

    <?php include_once 'includes/footer.php' ?>