<?PHP

function svg($width,$height,$elements){
	$salida="<svg width=$width height=$height>$elements</svg>";
	return($salida);
	}

function svgrect($name,$x,$y,$w,$h,$fill,$linewid,$linecolor){
	$salida="<rect style=\"fill:$fill;stroke:$linecolor;stroke-width:$linewid\"	id=\"$name\" width=\"$w\" height=\"$h\" x=\"$x\" y=\"$y\" 	/>";
	return($salida);
}



/*
	<svg height=100 width=300 >

	</svg>



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

*/
?>
