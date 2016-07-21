<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
		</script> 
	
	</head> 
	
	<body>
		<script type="text/javascript" src="jquery.svg.js"></script> 
	
	
		<script type="text/javascript">
			$(document).ready(function() {
				$("#svgload").svg({
					onLoad: function(){
						var svg = $("#svgload").svg('get');
						svg.load('Red1.svg', {addTo: true,  changeSize: false});        
					},
					settings: {}}
				);  
	
	    	$('#btnTest').click(function(e){
					var rect = $('#idRect1');
					rect.css('fill','green');
					rect.css('width','100');
					var txt = $('#idText1');
					txt.text('div test ');
				});    
	
				$('#btn-test1').click(function(e){
					var rect = $('#idRect1');
					rect.css('fill','BLUE');
					rect.css('width','200');
					var txt = $('#idText1');
					txt.text('boton test 1');
				});    

				$('#btn-test2').click(function(e){
					var rect2 = $('#cuadrito');
					rect2.css('fill','BLUE');
					rect2.css('width','200');
					var txt = $('#idText1');
					txt.text('boton test 2');
				});    

				$('#btn-test3').click(function(e){
					var rect2 = $('#cuadrito');
					rect2.css('fill','red');
					rect2.css('width','200');
					var txt = $('#idText1');
					txt.text('boton test 3');
				});    


			});
		</Script>   
	
	
	
	
	
	
	
		<div id="svgload" style="width: 100%; height: 300px;">
		</div>

		<div>
			<svg  width=50 height=50>
				<rect id=cuadrito x=2 y=2 width=40 height=40 style=fill:#000; />
				<text>TEXTO</text>
			</svg>
		</div>


	
	
		<button class="btn" id="btn-test1">Test 1</button>
		<button class="btn" id="btn-test2">Test 2</button>
		<button class="btn" id="btn-test3">Test 3</button>
		
	
		<div id="btnTest">[Click Me]</div>
	
	</body>
</html>
