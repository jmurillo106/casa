<?PHP
include "functions.php";
$casa="";


$cuarto=svgrect("lote",1,1,250,75,"#ccc",1,"#000");
$casa.=$cuarto;

$cuarto=svgrect("patio1",1,1,20,75,"#fff",1,"blue");
$casa.=enlace("#patio_frente",$cuarto);

$cuarto=svgrect("memo",22,1,30,30,"#fff",1,"black");
$casa.=enlace("#memo",$cuarto);

$cuarto=svgrect("store",50,1,30,30,"#fff",1,"black");
$casa.=enlace("#store",$cuarto);

$cuarto=svgrect("bano",80,1,15,30,"#fff",1,"black");
$casa.=enlace("#bano",$cuarto);

$casa.=svgtext(30,100,"JMURILLO-HOME");

$casa=svg(260,120,$casa	);

print<<<html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>test @ casa</title>
	</head>
	<body style="background:silver;">
<br>
			*$casa*
	</body>
</html>
html;
?>
