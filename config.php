<?php
    $host    	= "localhost";
    $user   	= "root";
    $pass    	= "";
    $dbname 	= "ogilvyindonesia";
    
    $conn 		= mysql_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
    
    mysql_select_db ( $dbname , $conn ) or die ( 'Could not select database.' );
    
    $baseurl	= "http://localhost/ogilvyindonesia/";
?>