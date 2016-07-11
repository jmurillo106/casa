<?PHP
$salida="";
$db=mysql_connect("localhost","localuser","localpass") or die(mysql_error());
mysql_select_db("www");
$query="select name,status from casa;";
$result=mysql_query("$query");
while($row=mysql_fetch_array($result)){
$salida.="$row[1],";
}
mysql_close($db);
print $salida;

?>
