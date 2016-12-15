<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Integrated Libaray Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php include "admin_check.php"?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo"HELLO". $_SESSION["username"];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i> Items <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li>
                            <a href="view_item.php"><i class="glyphicon glyphicon-th-list"></i> View Items</a>
                        </li>
                        <li>
                            <a href="add_item.php"><i class="glyphicon glyphicon-new-window"></i> Add Item</a>
                        </li>
                        <li>
                            <a href="update_item.php"><i class="glyphicon glyphicon-pencil"></i> Update Item</a>
                        </li>
                        <li>
                            <a href="delete_item.php"><i class="fa fa-fw fa fa-archive"></i> Delete Item</a>
                        </li>
                    </ul>
                </li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Users <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li>
                            <a href="item_checkin.php"><i class="fa fa-fw fa fa-check-square-o"></i>Check In</a>
                        </li>
                        <li>
                            <a href="authorize_user.php"><i class="fa fa-fw fa fa-thumbs-o-up"></i> Authorize</a>
                        </li>
                    </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                    </div>
                </div>

                <div class="row">               
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa fa-thumbs-o-up"></i> Authorize Users</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Card Number</th>
                                                <th>User Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          include 'get_db_con.php';
                                          
                                          $sql = "select card_number , username from person where approved = 0 LIMIT 10";
                                          
                                          $resultset = $conn->query ( $sql );
                                          
                                          
                                          if ($resultset->num_rows > 0) {
                                          		while($row = $resultset->fetch_assoc ()){
                                          			echo "<tr><td>".$row["card_number"]."</td><td>".$row["username"]."</td></tr>";
                                          		}
                                          	}                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="authorize_user.php">Authorize Users<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i>Items</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Item_id</th>
                                                <th>title</th>
                                                <th>type</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php                                           
                                          $sql1 = "select item_id,type,title from item LIMIT 10";
                                          
                                          $resultset1 = $conn->query ( $sql1 );
                                          if ($resultset1->num_rows > 0) {
                                          		while($row1 = $resultset1->fetch_assoc()){
                                          			echo "<tr><td>".$row1["item_id"]."</td><td>".$row1["title"]."</td><td>".$row1["type"]."</td></tr>";
                                          		}
                                          	}                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="view_item.php">View All Items<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
