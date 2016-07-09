<?PHP
print<<<html
<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script>
	<meta charset="UTF-8">
	<title>JMURILLOHOME</title>
<script>
	$(document).ready(function(){
		function obtenertabla(){
	}
	setInterval(function(){ 
		$.post("casa.php", {a:"3"}, function(result){
	  	$("#casa").html(result);
		});
	},500);
});
</script>
	</head>
	<body style="background:silver;">
	<br>
<div id="casa">
CARGANDO MONITOR
</div>
	</body>
</html>
html;
?>
