<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TD2</title>
</head>
<body>

<?php
$nom = $_POST['name'];
$billet=$_POST['billet'];
$bs =$_POST['bs'];
$bl =$_POST['bl'];
$carte =$_POST['carte'];
$qte=$_POST['qte'];
$age=$_POST['age'];
$cy =$_POST['young'];
if ($billet==$bl) {
	$prix=25;
}
else{
	$prix=10;
}
if ($age>30){
	echo "Bonjour, ".$nom."!";
} 
else {echo "Salut,".$nom."!";}

if($carte==$cy){}

?>








</body>
</html>
