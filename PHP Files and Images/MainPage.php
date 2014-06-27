<?php
/*
 * Created on Mar 27, 2013
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

<center><font color="#C8166A" face="verdana" size=3><b>
<?php
echo "Please select action";
?>  
</b></font></center>
<br>
<br>

<center>

<a href="MultimediaMenu.php">
<img src="mediafiles.png" />
</a> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="PlaylistsMenu.php">
<img src="playlists.png" />
</a> 
<br><br><br><br>

<FORM action="default.php"><INPUT type=submit value="Log out"><a
href="default.php" ></a></FORM>

</center>

<?php

$mysql_host = "mysql3.000webhost.com";
$mysql_database = "a6765436_Library";
$mysql_user = "a6765436_Library";
$mysql_password = "123utep";

// Create connection
mysql_connect("$mysql_host",$mysql_user,$mysql_password) or die(mysql_error());
mysql_select_db("$mysql_database") or die(mysql_error());

$sqlCheck = mysql_query("SELECT * FROM `users` WHERE `UUsername` = '$_POST[username]'")
or die(mysql_error());

$numrows = mysql_num_rows($sqlCheck);

if($numrows == 0)
{
$sql = mysql_query("INSERT INTO users (UUsername)
VALUES ('$_POST[username]')")
or die(mysql_error());
}

$sql = mysql_query("SELECT * FROM `users` WHERE `UUsername` = '$_POST[username]'");
$row = mysql_fetch_array($sql);

echo "UID: ".$row['UID'];
echo "Username: ".$row['Uusername'];

$hola = $row['UID'];

$sql = mysql_query("UPDATE currentUser SET currentID=$hola")
or die(mysql_error());
?>

