<?PHP
$db=mysql_connect("localhost","localuser","localpass") or die(mysql_error());

mysql_close($db);





print<<<html
1
html;
?>
