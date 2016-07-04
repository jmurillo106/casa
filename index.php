<?PHP
include "functions.php";
$casa="";


$cuarto=svgrect("lote",1,1,250,75,"white",1,"#000");
$casa.=$cuarto;

$cuarto=svgrect("patio1",1,1,20,75,"silver",1,"blue");
$casa.=$cuarto;

$cuarto=svgrect("memo",20,1,30,30,"green",1,"black");
$casa.=$cuarto;

$casa=svg(300,300,$casa	);


print<<<html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>test @ casa</title>
	</head>
	<body style="background:silver;">

  <svg height=100 width=300 >
	<rect 
		style="fill:#000;stroke:black;stroke-width:2;stroke-linejoin:round"
		id="lote" width="250" height="75" x="0" y="0" 
	/>
	<a href="#memo">
		<rect id="memo" style="fill:#fff" width="35" height="35" stroke-width=2 x=20 y=2  />
	</a>
	<a href=#storage>
		<rect id="storage" style="fill:#ddd" width="40" height="35" stroke-width=2 x=55 y=2  />
	</a>
	<a href=#bano>
		<rect id="bano" style="fill:#def" width="20" height="35" stroke-width=2 x=90 y=2  />
	</a>
0	<a href=#taller>
		<rect id="taller" style="fill:#f00" width="40" height="35" stroke-width=2 x=110 y=2  />
	</a>
	<text x="30" y="50">=>*<=</text></a>
	
	   
	   </svg>
<br>
		 
			$casa


	</body>
</html>
html;

?>
