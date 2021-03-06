<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Integrated Libarary Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body> <?php  include "admin_check.php";?>

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
                    <li>
                            <a href="view_item.php"><i class="glyphicon glyphicon-th-list"></i> View Items</a>
                        </li>
                        <li>
                            <a href="add_item"><i class="glyphicon glyphicon-new-window"></i> Add Item</a>
                        </li>
                        <li class="active">
                            <a href="#"><i class="glyphicon glyphicon-pencil"></i> Update Item</a>
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
                        <h1 class="page-header"><i class="glyphicon glyphicon-pencil"></i>
                           Update Items
                        </h1>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="table-responsive">
                            <form action="update_item_check.php" method="GET">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                        <tr></tr>
                                        <?php
                                        include "get_db_con.php";
                                        if ($_SERVER ["REQUEST_METHOD"] == "GET") {
                                        	$item_id=$_GET["id"];
                                        	$sql="select * from item where item_id=".$item_id;
                                        	$result_set=$conn->query($sql);
                                        	if($result_set->num_rows>0){
                                        		$row = $result_set->fetch_assoc ();?>
                                        <tr>
                                       		<td><label>Item ID: </label></td>
                        					<td><input type="text" name="id" id="id" value="<?php echo $item_id;?>"/></td>
                        					</tr>
                                       		<tr>
                                       			<td><label>Item Type: </label></td>
                                       			<td><select id="type" name="type">
                        							<option><?php echo $row["type"];?></option>
                        							<option>Book</option>
                        							<option>Movie</option>
                        							<option>Ebook</option>
                        							<option>Journal</option>
                        							</select></td>
                                       		</tr>
                                       		<tr>
                                       		<td><label>Item Title: </label></td>
                        					<td><input type="text" name="title" id="title" value="<?php echo $row["title"];?>"/></td>
                        					<tr>
                        						<td><label>Item Category: </label></td>
                        						<td><input type="text" name="category" id="category" value="<?php echo $row["category"];?>"/></td>
                        					</tr>
                        					<tr>
                        						<td><label>Item Quantity: </label></td>
                       							<td> <input type="text" name="quantity" id="quantity" value="<?php echo $row["quantity"];?>"/></td></tr>
                        <tr><td><label>Item Publication: </label></td>
                        <td><input type="text" name="publication" id="publication" value="<?php echo $row["publication"];?>"/></td></tr>
                        <tr><td><label>Item Pages: </label></td>
                        <td><input type="text" name="pages" id="pages" value="<?php echo $row["pages"];?>"/></td></tr>
                        <tr><td><label>Item Edition: </label></td>
                        <td><input type="text" name="edition" id="edition" value="<?php echo $row["edition"];?>"/></td></tr>
                        <tr><td><label>Item Year: </label></td>
                        <td><input type="text" name="year" id="year" value="<?php echo $row["year"];?>"/></td></tr>
                        <tr><td align="right"><input type="submit" value="Update Item"/></td>
                                                                <?php }
                                        else{
                                        	echo '<script type="text/javascript">';
                                        	echo 'alert("Item Not found");';
                                        	echo 'window.location.href = "update_item.php";';
                                        	echo '</script>';
                                        }
                                        }?>
                                        </tbody>
                                    </table>
							 </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

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
