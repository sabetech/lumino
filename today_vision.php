<?php include_once 'includes/header.php' ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Today's Attendance</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Today's Attendance</h1>
            </div>
        </div><!--/.row-->

        <div class="panel panel-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body tabs">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#pilltab1" data-toggle="tab">Vision Lecture</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="pilltab1">
                                    <table class="table" id="vision-lecture-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Index</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Time</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Index</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Time</th>
                                        </tr>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!--/.panel-->
                </div><!-- /.col-->
            </div>
        </div>

<?php include_once 'includes/footer.php' ?>