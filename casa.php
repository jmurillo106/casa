<?PHP
include "functions.php";
$temp=rand(30,36);
$fill="yellow";
$lineclr="black";
$linewid=0.15;
$casa="";
$cuarto=svgrect("lote",1,1,250,75,"silver",$linewid,"$lineclr");
$casa.=$cuarto;

$cuarto=svgrect("patiofrente",1,2,21,73,"$fill",$linewid,"$lineclr");
$casa.=enlace("#patiofrente",$cuarto);

$cuarto=svgrect("memo",22,2,30,30,"$fill",$linewid,"$lineclr");
$casa.=enlace("#memo",$cuarto);

$cuarto=svgrect("store",50,2,30,30,$fill,$linewid,"$lineclr");
$casa.=enlace("#store",$cuarto);

$cuarto=svgrect("bano",80,2,15,30,"$fill",$linewid,"$lineclr");
$casa.=enlace("#bano",$cuarto);

$cuarto=svgrect("taller",95,2,48,30,"$fill",$linewid,"$lineclr");
$casa.=enlace("#taller",$cuarto);

$cuarto=svgrect("porche",22,32,25,25,"$fill",$linewid,"$lineclr");
$casa.=enlace("#porche",$cuarto);

$cuarto=svgrect("cocina",47,32,48,25,"$fill",$linewid,"$lineclr");
$casa.=enlace("#cocina",$cuarto);


$cuarto=svgrect("jmurillo",95,32,48,43,"$fill",$linewid,"$lineclr");
$casa.=enlace("#jmurillo",$cuarto);


$cuarto=svgrect("patioatras",143,2,108,73,"$fill",$linewid,"$lineclr");
$casa.=enlace("#patioatras",$cuarto);

$cuarto=svgrect("lavadora",22,57,73,18,"$fill",$linewid,"$lineclr");
$casa.=enlace("#lavadora",$cuarto);








$casa.=svgtext(30,100,"JMURILLO-HOME (${temp}C)");

$casa=svg(260,120,$casa	);

print $casa;
