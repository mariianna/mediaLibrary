<?php
/*
 * Created on Mar 31, 2013
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

$sqlCheck = mysql_query("SELECT * FROM Playlist WHERE Pname = '$_POST[playlistName]' AND PUID = '$hola'")
or die(mysql_error());

$numrows = mysql_num_rows($sqlCheck);

if($numrows == 0)
{
header( 'Location: MainPage2.php' ) ;
}
else
{
$row = mysql_fetch_array($sqlCheck);
$hola = $row['PID'];
$sql = mysql_query("UPDATE currentPlaylist SET currentPID=$hola")
or die(mysql_error());
header( 'Location: modifyPlaylist.php' ) ;
}


?>

