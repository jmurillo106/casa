<?PHP
session_start();

$f=fopen("data","r") or die("fopen r error");
$data= fread($f,10);
fclose($f);


$a=$_GET['a'];
$r=$_GET['r'];

if($_GET['a']=="t"){
	$data[$r]=1;	
	
	$f=fopen("data","w") or die("fopen w error");
	fwrite($f,$data);
	fclose($f);
}

	header("location:/");
?>
