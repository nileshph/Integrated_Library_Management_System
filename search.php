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
    <link href="css/bootstrap.css" rel="stylesheet">

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
                    <li class="active">
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
                    <li>
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
                            Search
                            <small>For books, ebooks and movies</small>
                        </h1>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">General Search</a></li>
                            <li><a data-toggle="tab" href="#menu1">Books and E-books</a></li>
                            <li><a data-toggle="tab" href="#menu2">Movies</a></li>
                        </ul>

                        <div id="danger-zone" class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <h3>General Search</h3>
                                <div class="col-lg-6">
                                    <div class="form-group input-group">
                                    <input type="text" id="keyword-gen-search" class="form-control">
                                    <span class="input-group-btn"><button id="btn-gen-search" class="btn btn-default"><i class="fa fa-search"></i></button></span>
                                    <button class="btn btn-default"><a href="advance_search.php">Advance Search</a></button>
                                    </div>
                                    <table id ='res-gen-search' class="table table-bordered table-hover table-striped">
                                    </table>
                                </div>

                            </div>
                            <div id="menu1" class="tab-pane fade">
                              <h3>Books and E-books</h3>
                                <div class="col-lg-6">
                                    <div class="form-group input-group">
                                    <input type="text" id="keyword-book" class="form-control">
                                    <span class="input-group-btn"><button id="btn-book" class="btn btn-default"><i class="fa fa-search"></i></button></span>
                                    </div>
                                    <table id ='res-book' class="table table-bordered table-hover table-striped">
                                    </table>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                              <h3>Movies</h3>
                                <div class="col-lg-6">
                                    <div class="form-group input-group">
                                    <input type="text" id="keyword-movie" class="form-control">
                                    <span class="input-group-btn"><button id="btn-movie" class="btn btn-default"><i class="fa fa-search"></i></button></span>
                                    </div>
                                    <table id ='res-movie' class="table table-bordered table-hover table-striped">

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
    <script>
        $(document).ready(function(){
        $('#res-gen-search').hide();
        $('#res-book').hide();
        $('#res-movie').hide();

        $('#btn-gen-search').click(function(){
        $('#res-gen-search').hide();
        var keyword = $('#keyword-gen-search').val();
        console.log(keyword);
        $.ajax({
            url:"search_item.php",
            dataType: "json",
            type:"GET",
            data: {keyword},
            success:function(bookList){
                console.log(bookList);
                $('#res-gen-search').empty();
                $('#res-gen-search').html('<tr><th>Item Id</th><th>Title</th><th>Publication</th><th>Quantity</th><th>Category</th><th>Actions</th></tr>');
                for(var i = 0; i < bookList.length; i++){
                    $('#res-gen-search').append('<tr><td>'+bookList[i]['item_id']+'</td><td>'+bookList[i]['title']+'</td><td>'+bookList[i]['publication']+'</td><td>'+bookList[i]['quantity']+'</td><td>'+bookList[i]['type']+'</td><td>'+ '<button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-heart"></span></button><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>' +'</td></tr>');
                }
                $('#res-gen-search').show();
            },
            error:function(){
                alert("Error loading file");
                }
            });
        });
        /*
        * Ajax call for wishlist
        */
        $('#danger-zone').on('click', '.btn-danger', function(){
        var item_id = $('td:first', $(this).parents('tr')).text();
        console.log("Add to wishlist was clicked"+item_id);
        $.ajax({
            url: 'add_to_wishlist.php',
            type:'GET',
            dataType: 'text',
            data: {item_id},
            success: function(message){
                alert(message);
            }
        });
        return false;
        });

        /*
        * Ajax call for cart
        */
        $('#danger-zone').on('click', '.btn-success', function(){
        var item_id = $('td:first', $(this).parents('tr')).text();
        console.log("Add to cart was clicked"+ item_id);
        $.ajax({
            url: 'add_to_cart.php',
            type:'GET',
            dataType: 'text',
            data: {item_id},
            success: function(message){
                alert(message)

            }
        });
        return false;
        });

        $('#btn-book').click(function(){
        $('#res-book').hide();
        var keyword = $('#keyword-book').val();
        $.ajax({
            url:"search_book.php",
            dataType: "json",
            type:"GET",
            data: {keyword},
            success:function(bookList){
                console.log(bookList);
                $('#res-book').empty();
                $('#res-book').html('<tr><th>Item Id</th><th>Title</th><th>Publication</th><th>Quantity</th><th>Category</th><th>Actions</th></tr>');
                for(var i = 0; i < bookList.length; i++){
                    $('#res-book').append('<tr><td>'+bookList[i]['item_id']+'</td><td>'+bookList[i]['title']+'</td><td>'+bookList[i]['publication']+'</td><td>'+bookList[i]['quantity']+'</td><td>'+bookList[i]['type']+'</td><td>'+ '<button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-heart"></span></button><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>' +'</td></tr>');
                }
                $('#res-book').show();
            },
            error:function(){
                alert("Error loading file");
                }
            });
        });

        $('#btn-movie').click(function(){
        $('#res-movie').hide();
        var keyword = $('#keyword-movie').val();
        //console.log(keyword);
        $.ajax({
            url:"search_movies.php",
            dataType: "json",
            type:"GET",
            data: {keyword},
            success:function(bookList){

                console.log(bookList);
                $('#res-movie').empty();
                $('#res-movie').html('<tr><th>Item Id</th><th>Title</th><th>Publication</th><th>Quantity</th><th>Category</th><th>Actions</th></tr>');
                for(var i = 0; i < bookList.length; i++){
                    $('#res-movie').append('<tr><td>'+bookList[i]['item_id']+'</td><td>'+bookList[i]['title']+'</td><td>'+bookList[i]['publication']+'</td><td>'+bookList[i]['quantity']+'</td><td>'+bookList[i]['type']+'</td><td>'+ '<button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-heart"></span></button><button class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span></button>' +'</td></tr>');
                }
                $('#res-movie').show();
            },
            error:function(){
                alert("Error loading file");
                $(location).attr("href", 'login.html');
                }
            });
        });
    });
    </script>

</body>

</html>