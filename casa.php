<?PHP
$salida="";
$factor=2.3;


$cuartos=file("cuartos.data");
foreach($cuartos as $cuarto){
	$row=explode(' ',$cuarto);
	$name=$row[1];
	$x=$row[2]*$factor;
	$y=$row[3]*$factor+2;
	$w=$row[4]*$factor;
	$h=$row[5]*$factor;
	$xt=$x+2;
	$yt=$y+(0)+8;
	$salida.=<<<cuarto
	<rect id="$name" x="$x" y="$y" width="$w" height="$h"style="fill:none;stroke-width:1;stroke:#000" />\n
	<text x=$xt y=$yt  transform="rotate(45,$xt,$yt)"style=font-size:10; >$name</text>
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
