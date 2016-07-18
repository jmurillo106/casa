<?PHP
$salida="";
$factor=2.3;
$db=mysql_connect("localhost","localuser","localpass") or die(mysql_error());
mysql_select_db("www");
$result=mysql_query("select * from casa;");
while($row=mysql_fetch_array($result)){
	$name=$row[1];
	$x=$row[2]*$factor;
	$y=$row[3]*$factor+2;
	$w=$row[4]*$factor;
	$h=$row[5]*$factor;
	$xt=$x+2;
	$yt=$y+(0)+6+$row[0];
	$salida.=<<<cuarto
	<rect id="$name" x="$x" y="$y" width="$w" height="$h"style="fill:white;stroke-width:1;stroke:#000" />\n
	<text x=$xt y=$yt  transform="rotate(45,$xt,$yt)"style=font-size:12; >$name</text>
cuarto;
}

$salida="<svg width=\"600\" height=\"300\" >\n $salida </svg>";

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
