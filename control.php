<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

require_once("model.php");

$dataFile = 'board.dat';
$line_data = "";
$kensu = "";
$view_head_height = "250";

// POST ( FORM からの送信 )
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    write_data();

}

// *************************************
// 画面
// *************************************
if ( $_SERVER["REQUEST_METHOD"] == "GET" && $_GET["page"] != "init" ) {
    require_once("view.php");
}
if ( $_SERVER["REQUEST_METHOD"] == "GET" && $_GET["page"] == "init" ) {
    read_data( $dataFile );
    require_once("view2.php");
}
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    read_data( $dataFile );
    require_once("view2.php");
}


//debug_print();
?>
