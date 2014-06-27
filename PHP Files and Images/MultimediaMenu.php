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

<center><font color="#C8166A" face="verdana" size=3><b>
<?php
echo "Please select action";
?>  
</b></font></center>
<br>
<br>

<center>

<a href="addFile.php">
<img src="addfile.png" />
</a> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="modifyFile.php">
<img src="modifyfile.png" />
</a> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="deleteFile.php">
<img src="deletefile.png" />
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


?>