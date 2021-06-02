<?php include_once 'includes/header.php' ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div><!--/.row-->

        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <a href="reg_students.php">
                        <div class="panel panel-orange panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                                <i class="fa fa-spinner fa-spin r_loading-spin"></i>
                                <div class="large" id="reg_students">-</div>
                                <div class="text-muted">Registered Students</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <a href="today_vision.php">
                        <div class="panel panel-teal panel-widget border-right">
                            <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                                <i class="fa fa-spinner fa-spin loading-spin"></i>
                                <div class="large" id="today-scan">-</div>
                                <div class="text-muted">Today's Vision Lecture</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                            <div class="large">52</div>
                            <div class="text-muted">Today's Pillar Lecture</div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>


<?php include_once 'includes/footer.php' ?>