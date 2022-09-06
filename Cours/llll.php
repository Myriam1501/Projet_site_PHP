<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TD2</title>
</head>
<body>

<?php
/* ÉTAPE 4: si le joueur a deviné une lettre à la bonne position dans une tentative, toute tentative suivante doit forcément avoir cette lettre à cette position. 
$tent1 = array("P", "A", "L", "E", "S") ;
$tent2 = array("C", "O", "R", "P", "S") ;
$tent3 = array("C", "A", "R", "T", "E") ;
$sol1[] = $tent1 ;
$sol1[] = $tent2 ;
$sol1[] = $tent3 ;
$fin = end($sol1);


for ($i=0; $i <sizeof($sol1)-1 ; $i++) { 
	for ($y=0; $y <(sizeof($sol1)-1)*5-1 ; $y++) { 


		if(($sol1[$i][$y]==$sol1[sizeof($sol1)-1][$y])&& ($sol1[$i][$y]!=$sol1[$i+1][$y])){
			echo "Cette solution n’est pas correcte. L'erreur est à la position ".($i+1)." de la liste. Sur la lettre ".$sol1[$i+1][$y] ;
		};

		
	};
};
/echo $sol1[$i][$y]."<br>".$sol1[$i+1][$y];
foreach ($sol1 as $cle=>$value) {
	for ($y=0; $y <(sizeof($sol1)-1)*5-1 ; $y++) { 
		echo $value[$y]." n  ".$value[$y+5]."<br>";
	};
};
/*
$y= (sizeof($sol1)-1)*5-1;
echo $y;
foreach ($sol1 as $cle=>$value) {
	foreach ($value as $c=>$valeur) { 
	for ($i=0; $i<=((sizeof($sol1)-1)*5)-1; $i++) {

		echo $value[$i]."kkk".$value[$i]."<br>";
	};
};};
/*foreach ($sol1 as $cle=>$value) {
		foreach ($value as $c=>$valeur) { 
foreach ($fin as $c=>$valeur) { 
	for ($i=0; $i<=((sizeof($sol1)-1)*5)-1; $i++) {
		echo $value[$i]."kkk".$value[$i+5]."<br>";
	}
	};
};



				};	

*/
/*on peut aussi mettre pour le string: is_string($mot) == bool(true)*/
?>

<?php 


$tent1 = array("P", "A", "L", "E", "S") ;
$tent2 = array("C", "O", "R", "P", "S") ;
$tent3 = array("C", "A", "R", "T", "E") ;
$solution[] = $tent1 ;
$solution[] = $tent2 ;
$solution[] = $tent3 ;

$mot="lkjhf";


function MonWordle($solution, $mot){

	foreach ($solution as $cle=>$value) {echo implode("",$value)."<br>";	};


	$motm=trim($mot);
	
	if (strlen($motm)!=5 || gettype($motm)!=string 
	) {
		echo "Le mot ".$mot." n'est pas valide pour ce jeu";
	}

	else{
		//mettre une valeur contenant la dernier tentaive en string
		$fin = implode("",end($solution));

		//enlever les espaces possible et mettre le mot en majuscule
		$tent=trim(strtoupper($mot));

		//tester l'egaliter
		if ($fin!=$tent) {
			echo "Le mot ".$mot."c’est pas celui affiché à la dernière ligne de la solution.";
			};
		};

	for ($i=0; $i <sizeof($solution)-1 ; $i++) { 
		for ($y=0; $y <(sizeof($solution)-1)*5-1 ; $y++) { 
			/*
			if(($solution[$i][$y]==$solution[sizeof($solution)-1][$y])&& ($solution[$i][$y]!=$solution[$i+1][$y])){
				echo "Cette solution n’est pas correcte.";
					
				echo "L'erreur est à la position ".($i+1)." de la liste. Sur la lettre ".$sol1[$i+1][$y] ;
			};*/

		
		};
	};


?>
		







</body>
</html>
