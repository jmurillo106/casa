<?PHP
$salida="";
$db=mysql_connect("localhost","localuser","localpass") or die(mysql_error());
mysql_select_db("www");
$result=mysql_query("select * from casa;");
while($row=mysql_fetch_array($result)){
	$salida.=<<<rect
	<rect id="$row[1]" x="$row[2]" y="$row[3]" width="$row[4]" height="$row[5]" style="fill:blue;stroke-width:4;stroke:#000" >\n
rect;
}

$salida="<svg width=\"400\" height=\"400\" >\n $salida </svg>";

print<<<html
<!DOCTYPE html>
<html>
<head>
</head>
<body>

 $salida 

</body>
</html>
html;
?>
