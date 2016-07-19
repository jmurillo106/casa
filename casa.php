<?PHP
$salida="";
$factor=2.3;

$colors=array("silver","black","green","yellow","red");
$cuartos=file("casa.dat");
foreach($cuartos as $cuarto){
	$row=explode(",",$cuarto);
	$name=$row[1];
	$x=$row[2]*$factor;
	$y=$row[3]*$factor+2;
	$w=$row[4]*$factor;
	$h=$row[5]*$factor;
	$xt=$x+5;
	$yt=$y+10;
	$cx=($row[2]+$row[4])*$factor-10;
	$cy=$row[3]*$factor+13;

	$c=intval($row[6]);

	$icono1=array("10,50","50,50","30,100");
	$points="10,50 50,50 30,100 ";
	$salida.=<<<cuarto
	<rect id="$name" x="$x" y="$y" width="$w" height="$h"style="fill:white;stroke-width:1;stroke:#000" />\n
	<text x=$xt y=$yt  transform="rotate(50,$xt,$yt)"style=font-size:12; >$row[1]</text>
	<!-circle cx=$cx cy=$cy r=10 style="fill:$colors[$c];"/>
	<a href=#$row[0]> 
	<polygon points="$points" style="fill:lime;stroke:black;stroke-width:.5" />
	</a>
cuarto;
}

$salida="<svg width=\"580\" height=\"180\" >\n $salida </svg>";
$test="";
//$test=file_get_contents("http://mantenimiento/");


print<<<html
<!DOCTYPE html>
<html>
<head>
</head>
<body>

 $salida 
$test
</body>
</html>
html;
?>




