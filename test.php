<?PHP
$cuartos=file("cuartos.data");
foreach($cuartos as $cuarto){
	$d=explode(' ',$cuarto);
	print "$d[0] $d[1] $d[2] $d[3] $d[4] $d[5]<br>";
}


?>
