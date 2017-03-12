<?php

$host="localhost";
$User="root";
$Pass="";
$dbname="appkasir"; //databasenya dibikin sama bambang & jihad pake phpmyadmin
$connect=mysql_connect($host, $User, $Pass) or die(mysql_error());
$dbselect=mysql_select_db($dbname);

?>