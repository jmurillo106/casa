<?PHP
include "functions.php";
$temp=rand(30,36);
$fill="#ff0";
$lineclr="black";
$linewid=0.15;
$casa="";

$f=fopen("data","r") or die("fopen r error");
$status= fread($f,filesize("data"));




$colors=array("white","green","yellow","red","black","#def");

$cuarto=svgrect("lote",1,1,250,75,"silver",$linewid,"$lineclr");
$casa.=$cuarto;

$cuarto=svgrect("0",2,2,20,73,$colors[$status[0]],$linewid,"$lineclr");
$casa.=enlace("action.php?r=0&a=t",$cuarto);

$cuarto=svgrect("1",22,2,30,30,$colors[$status[1]],$linewid,"$lineclr");
$casa.=enlace("#memo",$cuarto);

$cuarto=svgrect("store",50,2,30,30,$colors[$status[2]],$linewid,"$lineclr");
$casa.=enlace("#store",$cuarto);

$cuarto=svgrect("bano",80,2,15,30,$colors[$status[3]],$linewid,"$lineclr");
$casa.=enlace("#bano",$cuarto);

$cuarto=svgrect("taller",95,2,48,30,$colors[$status[4]],$linewid,"$lineclr");
$casa.=enlace("#taller",$cuarto);

$cuarto=svgrect("porche",22,32,25,25,$colors[$status[5]],$linewid,"$lineclr");
$casa.=enlace("#porche",$cuarto);

$cuarto=svgrect("cocina",47,32,48,25,$colors[$status[6]],$linewid,"$lineclr");
$casa.=enlace("#cocina",$cuarto);


$cuarto=svgrect("jmurillo",95,32,48,43,$colors[$status[7]],$linewid,"$lineclr");
$casa.=enlace("#jmurillo",$cuarto);


$cuarto=svgrect("patioatras",143,2,107,73,$colors[$status[8]],$linewid,"$lineclr");
$casa.=enlace("#patioatras",$cuarto);

$cuarto=svgrect("lavadora",22,57,73,18,$colors[$status[9]],$linewid,"$lineclr");
$casa.=enlace("#lavadora",$cuarto);

$casa.=svgtext(10,90,"JMURILLO-HOME<br> (${status})");

$casa=svg(2550,90,$casa	);
//$casa.=file_get_contents("data");
//print "status: $status";
print $casa;
