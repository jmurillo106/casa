<?PHP

function svg($width,$height,$elements){
	$salida="<svg width=$width height=$height>$elements</svg>";
	return($salida);
	}

function svgrect($name,$x,$y,$w,$h,$fill,$linewid,$linecolor){
	$salida="<rect style=\"fill:$fill;stroke:$linecolor;stroke-width:$linewid\"	id=\"$name\" width=\"$w\" height=\"$h\" x=\"$x\" y=\"$y\" 	/>\n";
	return($salida);
}

function svgtext($x,$y,$text){
return(" <text x=\"$x\" y=\"$y\">$text</text>");
}
function enlace($url,$element){
	return("<a href=\"$url\">$element</a>");
}




?>
