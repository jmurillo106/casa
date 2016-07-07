<?PHP
include "functions.php";

$casa="";
$cuarto=svgrect("lote",1,1,250,75,"#ccc",1,"#000");
$casa.=$cuarto;

$cuarto=svgrect("patio1",1,1,20,75,"#fff",1,"#000");
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>



		<meta charset="UTF-8">
		<title>Dany</title>

<script>
$(document).ready(function(){


function obtenertabla(){


}


$("#tb1").click(function(){
	$.post("tabla.php", {a:"3"}, function(result){
		$("#tabla").html(result);
	});
});

setInterval(function(){ 
	$.post("tabla.php", {a:"3"}, function(result){
  	$("#tabla").html(result);
	});
},3000);


});

</script>


	</head>
	<body style="background:silver;">
<br>
			*$casa*


<input type=button id="tb1" name=uno value=dos />
<div id="tabla">
</div>


	</body>
</html>
html;
?>
