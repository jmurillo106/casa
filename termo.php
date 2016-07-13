<?PHP

$d=13;
$b=rand(10,170)-90;
//$b=-90;
$a=deg2rad($b);
$l=80;
$x2=sin($a)*$l;
$y2=cos($a)*$l;

$x2=100-$x2;
$y2=100-$y2;
$x=100;
$y=100;

print<<<html
	<svg height="200" width="200">

		<circle cx="100" cy="100" r="90" stroke="silver" stroke-width="4" fill="white" />

		<path d="M 100 100 L 30 125 	Q 40 30  100 25 	Q 155 25  170 125 Z" stroke="#000" stroke-width="3" fill="#ffc" />

		<line x1="100" y1="100" x2="$x2" y2="$y2" style="stroke:blue;stroke-width:3" />

		<circle cx="100" cy="100" r="8" stroke="none" stroke-width="1" fill="blue" />

	</svg>
html;
?>
