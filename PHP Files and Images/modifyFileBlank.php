<?php
/*
 * Created on Mar 30, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

<style type="">
<!--
body {
background-image: url(chevron.jpg);
background-repeat: repeat-x;
height: 100%;
width: 100%;
background-position: bottom;
}
//-->
</style>

<?php

$mysql_host = "mysql3.000webhost.com";
$mysql_database = "a6765436_Library";
$mysql_user = "a6765436_Library";
$mysql_password = "123utep";

// Create connection
mysql_connect("$mysql_host",$mysql_user,$mysql_password) or die(mysql_error());
mysql_select_db("$mysql_database") or die(mysql_error());

$sql = mysql_query("SELECT * FROM `currentUser`");
$row = mysql_fetch_array($sql);
$hola = $row['currentID'];


$sql = mysql_query("UPDATE modifyFile SET ID=$hola, Mtype ='$_POST[mediaType]', Mname= '$_POST[fileName]'")
or die(mysql_error());

?>

<head>
<meta http-equiv="refresh" content="1; URL=modifyFile2.php">
</head>
