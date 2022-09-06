<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EXERCICE2</title>
</head>
<body>
<!--Myriam OUNISSI & Emma FIX-->


<?php
/*
• Par simplicité, la fonction ne contrôle pas si chaque tentative correspond à un mot du dictionnaire.
• Par simplicité, nous allons tester la fonction MonWordle($solution, $mot) seulement sur des solu- tions $solution qui sont au “bon” format : c’est à dire, vous ne devez pas vérifier si chaque tentative de la $solution est bien un tableau qui contient 5 lettres en majuscule.
*/


function MonWordle($solution, $mot){

/*ÉTAPE 1 : écrit tous les mots qui correspondent aux tentatives dans la $solution 	(chaque tentative est écrite dans une nouvelle ligne)*/
	foreach ($solution as $cle=>$value) {echo implode("",$value)."<br>";	};

/*ÉTAPE 2 : contrôle si $mot est bien une chaîne de caractères de 5 lettres*/

	//pour cela, on va enlever, s'il y a, les espace pour pas les compter
	$motm=trim($mot);
	
	if (strlen($motm)!=5 || gettype($motm)!=string 
	/*on peut aussi mettre pour le string: is_string($mot) == bool(true)*/) {
		echo "Le mot ".$mot." n'est pas valide pour ce jeu";
	}
/*ÉTAPE 3 :elle contrôle si le mot $mot est bien celui qui correspond à la dernière tentative de $sol 

ici il y a deux possibiliter on peut soit chercher pour chaque lettre si elles sont égal, ou prendre la valeur de la fin (changer en string) et regarder son égaliter (nous feront ici la deuxième méthode)
*/
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

/* ÉTAPE 4: si le joueur a deviné une lettre à la bonne position dans une tentative, toute tentative suivante doit forcément avoir cette lettre à cette position. */
	
	// faire une boucle pour la liste solution
	for ($i=0; $i <sizeof($solution)-1 ; $i++) { 
		//faire une boucle pour les listes dans la solution
		for ($y=0; $y <(sizeof($solution)-1)*5 ; $y++) { 

			//regarder si chaque lettre correspond selon sa position a celle de la bonne réponse et si elle est bien mise dans la tentative suivante
			if(($solution[$i][$y]==$solution[sizeof($solution)-1][$y])&& ($solution[$i][$y]!=$solution[$i+1][$y])){
				echo "Cette solution n’est pas correcte.";
					/*(bonus) Si la solution n’est pas correcte, la fonction nous indique où se trouve l’erreur dans les tentatives.*/
				echo "L'erreur est à la position ".($i+1)." de la liste. Sur la lettre ".$sol1[$i+1][$y] ;
			};

		
		};
	};
};

?>
</body>
</html>