<?PHP
//$db=mysql_connect("localhost","localuser","localpass") or die(mysql_error());
//
//mysql_close($db);

print<<<html
<html>
<head>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){

	setInterval(function(){ 
		$.post("casa.php", {a:"3"}, function(result){
	  	$("#casa").html(result);
		});
	},1000);

	$.post("casa.php", {a:"3"}, function(result){
  	$("#casa").html(result);
	});



	});

</script>

</head>

<body>
<div  id=casa class="col-xs-12 "style="border:1px solid red;height:300px;">
casa
</div>
</body>
</html>
html;
?>
