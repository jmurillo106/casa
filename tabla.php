<?PHP
$row="";
$rows="";
$x=15;


for($j=0;$j<5;$j++){
	for($i=0;$i<5;$i++){
		 $row.=sprintf("<td>%d</td>",$x+$i+$j+100);
		}
	$rows.="<tr>$row</tr>";
	$row="";
	}



$tabla="<table border=1>$rows</table>";
print $tabla;
//print "21";
?>
