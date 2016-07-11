<?PHP
print "\n\nhola\n\n";
$f=fopen("data","r") or die("fopen r error");
$a= fread($f,filesize("data"));
fclose($f);

$a[0]="1";
$a[1]="1";
$a[2]="3";

$f=fopen("data","w") or die("fopen w error");
fwrite($f,$a);
fclose($f);

print "\n".$a."\n";

?>
<?PHP
session_start();








header("location:/");
?>
