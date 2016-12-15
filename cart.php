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
                <a class="navbar-brand" href="index_login.php">UT-Dallas Library</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Hello</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Hello</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>Hello</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hello <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li> -->
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="search.php"><i class="fa fa-fw fa-search"></i> Search</a>
                    </li>
                    <li>
                        <a href="loans.php"><i class="fa fa-book"></i> Loans</a>
                    </li>
                    <li>
                        <a href="fines.php"><i class="fa fa-money"></i> Fines</a>
                    </li>
                    <li>
                        <a href="wishlist.php"><i class="fa fa-heart"></i> Wishlist</a>
                    </li>
                    <li class="active">
                        <a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a>
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
                            Cart
                            <small>Review and checkout </small>
                        </h1>
                        <div class="col-lg-6">
                        <h2>My Cart</h2>
                            <div class="table-responsive">
                            <table id ='res-cart' class="table table-bordered table-hover table-striped">

                            </table>

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
    <script>
        $(document).ready(function(){

            $('#res-cart').hide();
            $.ajax({
                url:"get_cart.php",
                dataType: "json",
                type:"GET",
                success:function(cart){

                    $('#res-cart').empty();
                    $('#res-cart').html('<tr><th>Item id</th><th>Title</th><th>Quantity</th><th>Actions</th></tr>');
                    for(var i = 0; i < cart.length; i++){
                        $('#res-cart').append('<tr><td>'+cart[i]['item_id']+'</td><td>'+cart[i]['title']+'</td><td>'+cart[i]['quantity']+'</td><td><button class="btn btn-primary">Remove From Cart</button><span>  </span><button class="btn btn-success">Checkout</button></td></tr>');
                    }
                    $('#res-cart').show();
                },
                error:function(){
                    //alert("Error loading file");
                    $(location).attr("href", 'login.html');
                    }
                });

            /*
            * Ajax call for delete from Cart
            */
            $('#res-cart').on('click', '.btn-primary', function(){
                var item_id = $(this).closest('tr').find('td:eq(0)').text();

                $.ajax({
                    url: 'delete_from_cart.php',
                    type:'GET',
                    dataType: 'text',
                    data: {item_id},
                    success: function(result){
                        window.alert(result);
                    }
                });

                location.reload();
            });

            /*
            * Ajax call for checkout
            */
            $('#res-cart').on('click', '.btn-success', function(){
                var item_id = $(this).closest('tr').find('td:eq(0)').text();
                var quantity = $(this).closest('tr').find('td:eq(2)').text();
                //console.log("Item ID: " + item_id + " Quantity: " + quantity);
                $.ajax({
                    url: 'item_loan.php',
                    type:'GET',
                    dataType: 'text',
                    //data: {item_id},
                    data: {item_id: item_id, quantity: quantity },
                    success: function(result){
                        window.alert(result);
                    }
                });
                //return false;
                location.reload();
            });

            });
    </script>
</body>

</html>
