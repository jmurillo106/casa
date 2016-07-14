<?PHP

$d=13;
$b=rand(10,170)-90;
//$b=-90;
$a=deg2rad($b);
$l=50;
$x2=sin($a)*$l;
$y2=cos($a)*$l;

$x2=100-$x2;
$y2=100-$y2;
$x=100;
$y=100;

print<<<html
	<svg height="200" width="200">

    <marker id="triangle"
      viewBox="0 0 10 10" refX="0" refY="5" 
      markerUnits="strokeWidth"
      markerWidth="4" markerHeight="3"
      orient="auto">
      <path d="M 0 0 L 10 5 L 0 10 z" />
    </marker>

		<circle cx="100" cy="100" r="90" stroke="silver" stroke-width="4" fill="white" />

		<!-path d="M 100 100 L 30 125 	Q 40 30  100 25 	Q 155 25  170 125 Z" stroke="#000" stroke-width="3" fill="#ffc" />
	 	<path d = "M 25 100 a 75 75 0 1 1 150 0" fill="yellow"stroke="black"/>

		<line x1="100" y1="100" x2="$x2" y2="$y2"  marker-end="url(#triangle)"  style="stroke:blue;stroke-width:3" />

		<circle cx="100" cy="100" r="8" stroke="none" stroke-width="1" fill="blue" />

	</svg>
html;


/*

    <marker id="triangle"
      viewBox="0 0 10 10" refX="0" refY="5" 
      markerUnits="strokeWidth"
      markerWidth="4" markerHeight="3"
      orient="auto">
      <path d="M 0 0 L 10 5 L 0 10 z" />
    </marker>
	<line x1="100" y1="50.5" x2="300" y2="50.5" marker-end="url(#triangle)" stroke="black" stroke-width="10"/>
	<polyline points="100 100 300 100" marker-end="url(#triangle)" stroke="black" stroke-width="10"/>

 	<path d = "M 20 20 a 100 50 0 1 1 250 50"/>

	<path d="M100 150.5l200 0" marker-end="url(#triangle)" stroke="black" stroke-width="10"/>



*/


?>
