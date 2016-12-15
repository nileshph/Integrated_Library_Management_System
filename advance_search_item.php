<?php
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
    include 'get_db_con.php';
    include 'json_encode.php';
    include 'clean_input.php';

    $keyword = clean_input ( $_GET ["item"] );

    $category = clean_input($_GET ["category"]);
    if(!$keyword == "")

    $sql = "select * from item where title like '%".$keyword."%' and category like '%".$category."%' and active_ind = 1";
    $resultset = $conn->query ( $sql );

    $sql = "select * from item where publication like '%".$keyword."% and category like '%".$category."%' and active_ind = 1'";
    $resultset1 = $conn->query ( $sql );

    $sql = "select * from item where isbn = '".$keyword."' and category like '%".$category."%' and active_ind = 1";
    $resultset2 = $conn->query ( $sql );

    $sql="select i.* from author a, item_author ia, item i where a.name ='".$keyword
         ."' and ia.author_id = a.author_id and i.item_id = ia.item_id and i.active_ind = 1";
    $resultset3 = $conn->query ( $sql );

    $sql = "select * from item where item_id= ".$keyword;
    $resultset4 = $conn->query ( $sql );

    include 'close_db_con.php';

    $rs = array ();
    $rs = addToArr($resultset,$rs);
    $rs = addToArr($resultset1,$rs);
    $rs = addToArr($resultset2,$rs);
    $rs = addToArr($resultset3,$rs);
    $rs = addToArr($resultset4,$rs);

    $json_data = json_encode ( $rs );
    echo $json_data;
}
?>