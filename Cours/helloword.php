<html>
<body>
<h1> Premier exercice </h1>
<?php
$variable1 = "bonjour";
echo '<b>hello word</b>';

$date = date("d-m-y");
    echo "<br> ceci est la date du jour ".$date;


$date = date("d-m-20y");
    echo "<br> ceci est la date du jour ".$date;

/*
$mois = array('Janvier'=>31, 'Février'=>28, 'Mars'=>31, 'Avril'=>30, 'Mai'=>31,'Juin'=>30,'Juillet'=>31,'Août'=>31,'Septembre'=>30,'Octobre'=>31,'Novembre'=>30,'Décembre'=>31);

$mois = array('Janvier', 'Février'=>28, 'Mars'=>31, 'Avril'=>30, 'Mai'=>31,'Juin'=>30,'Juillet'=>31,'Août'=>31,'Septembre'=>30,'Octobre'=>31,'Novembre'=>30,'Décembre'=>31);  

    echo " tableau   ".$mois;*/
?>
<table align="center" border="1">
<?php
$mois = array('Janvier'=>31, 'Février'=>28, 'Mars'=>31, 'Avril'=>30, 'Mai'=>31,'Juin'=>30,'Juillet'=>31,'Août'=>31,'Septembre'=>30,'Octobre'=>31,'Novembre'=>30,'Décembre'=>31);


foreach ($mois as $key=> $value){echo "<br> $key  $value";}


echo"<br><br><br><br>";
foreach ($mois as $key=> $value){echo"<tr>";echo"<td>";
        echo "$key </td> <td> $value</td>";}



/*
echo"<br><br><br><br>";
for($lin=0; $lin<=0; $lin++){
    for($col=0; $col<=3; $col++){
        foreach ($mois as $key=> $value){echo"<tr>";echo"<td>";
        echo "$key </td> <td> $value</td>";}
        echo"</tr>";
    }
    
}

/*


for($lin=1, $lin<=2, $lin++){
    echo"<tr>";
    for($col=1, $col<=12, $col++){
        echo "<td>".($mois)."</td>";
        echo "<td>".($col)."</td>";

    }
    echo"</tr>";
}

for($lin=1; $lin<=9; $lin++){
    echo"<tr>";
    for($col=0; $col<=11; $col++){
        echo"<td>".($col*$lin)."</td>";
    }
    echo"</tr>";
}
/*
echo 'test'; 
/* la varable est i, conteneur de valeur elle se note : $variable= valeur   

echo $variable1=3;

echo gettype($variable1); // donne le type d'une variable

echo '<p>'.gettype($variable1).'</p>';
/*concatenation : chaine1.chaine2
 $var * $var2: multiplication 

 echo $variable1==0;


$date = new DateTime("2000-02-01");
$date2 = date_create('2000-02-01');


echo $date->format(Y)."<br>";
*/
?>


</table>



<br><br><br><br><br>

<?php

function carre($L,$l){
    for ($i=1; $i<=$L; $i++){
        for($y=1; $y<=$l; $y++){
            if($y==1||$y==$l||$i==1||$i==$L){echo'#';}
            else{echo'              ';}
           /*
           if(($y==2||$y==3) && ($i==2||$i == 3)){echo'...';}
           else{echo'#';}*/

        }
        echo'<br>';
    }

}
echo "".carre(4,4);
?>



<table border="1">
<?php

echo"<br><br><br><br>";
/*
for($lin=0; $lin<=0; $lin++){
    for($col=0; $col<=0; $col++){*/

$mois2 = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');


echo"<br><br><br><br><br><br>";
for ($i=0;$i<=11;$i++){
    if ($i%3==0){echo"<tr>";}
    echo "<td>".($i+1)."</td><td>".$mois2[$i]."</td>";
}
 



$nom = $_POST['name'];
$bs =$_POST['bs'];
$bl =$_POST['bl'];
$qte=$_POST['qte'];
$age=$_POST['age'];
if ($age>30){
    echo "Bonjour, ".$nom."!";
} ;
?>

/*
for ($i=1;$i<=12;$i++){

    echo "<td>".$i."</td><td>".$mois2[$i]."</td>";
    ($i%3==0) ? print ("<tr></tr>"): print ("");
}
?>
</table>

</body>
<html>