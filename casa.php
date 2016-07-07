<?PHP
include "functions.php";
$fill="#0f0";
$lineclr="#ff0";
$casa="";
$cuarto=svgrect("lote",1,1,250,75,"silver",1,"$lineclr");
$casa.=$cuarto;

$cuarto=svgrect("patio1",1,1,20,75,"$fill",1,"$lineclr");
$casa.=enlace("#patio_frente",$cuarto);

$cuarto=svgrect("memo",22,1,30,30,"$fill",1,"$lineclr");
$casa.=enlace("#memo",$cuarto);

$cuarto=svgrect("store",50,1,30,30,$fill,1,"$lineclr");
$casa.=enlace("#store",$cuarto);

$cuarto=svgrect("bano",80,1,15,30,"$fill",1,"$lineclr");
$casa.=enlace("#bano",$cuarto);

$cuarto=svgrect("taller",95,1,45,30,"$fill",1,"$lineclr");
$casa.=enlace("#taller",$cuarto);

$cuarto=svgrect("cocina",80,1,15,30,"$fill",1,"$lineclr");
$casa.=enlace("#cocina",$cuarto);

$casa.=svgtext(30,100,"JMURILLO-HOME ($fill)");

$casa=svg(260,120,$casa	);

print $casa;
