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
    <style type="text/css">
#content
{
width: 900px;
margin: 0 auto;
font-family:Arial, Helvetica, sans-serif;
}
.page
{
float: right;
margin: 0;
padding: 0;
}
.page li
{
list-style: none;
display:inline-block;
}
.page li a, .current
{
display: block;
padding: 5px;
text-decoration: none;
color: #8A8A8A;
}
.current
{
font-weight:bold;
color: #000;
}
.button
{
padding: 5px 15px;
text-decoration: none;
background: #333;
color: #F3F3F3;
font-size: 13PX;
border-radius: 2PX;
margin: 0 4PX;
display: block;
float: left;
}
</style>
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
                    <li>
                        <a href="login_admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i> Items <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li class="active">
                            <a href="#"><i class="glyphicon glyphicon-th-list"></i> View Items</a>
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
                        <h1 class="page-header"><i class="glyphicon glyphicon-th-list"></i>
                           View Items
                        </h1>
                    </div>
                </div>

                <div class="row">               
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Items</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Item_id</th>
                                                <th>Title</th>
                                                <th>Type</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php  
                                          include 'get_db_con.php';
                                          include 'clean_input.php';
                                          $start=0;
                                          $limit=10;
                                          if(isset($_GET['id']))
                                          {
                                          	$id=$_GET['id'];
                                          	$start=($id-1)*$limit;
                                          }
                                          $sql1 = "select * from item where active_ind = 1 LIMIT $start, $limit";    
                                          $resultset1 = $conn->query ( $sql1 );
                                          if ($resultset1->num_rows > 0) {
                                          		while($row1 = $resultset1->fetch_assoc()){
                                          			echo "<tr><td>".$row1["item_id"]."</td>
            												<td>".$row1["title"]."</td>
                											<td>".$row1["type"]."</td>
                											<td>".$row1["category"]."</td>
                    										<td>".$row1["quantity"]."</td></tr>";
                                          		}
                                          	}
                                          	$rows=$conn->query("select * from item where active_ind=1 ")->num_rows;
                                          	$total=ceil($rows/$limit);
                                          	if($id>1)
                                          	{
                                          		echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
                                          	}
                                          	if($id!=$total)
                                          	{
                                          		echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
                                          	}
                                          	echo "<ul class='page'>";
                                          	for($i=1;$i<=$total;$i++)
                                          	{
                                          		if($i==$id) { echo "<li class='current'>".$i."</li>"; }
                                          	
                                          		else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
                                          	}
                                          	echo "</ul>";
                                          	 
                                            ?>
                                        </tbody>
                                    </table>
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