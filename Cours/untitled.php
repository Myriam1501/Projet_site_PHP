<!DOCTYPE html>
<html >
    
    <body>
      <?php
      $db = mysqli_connect("localhost","root","root","gestion_panier")
           or die('could not connect to database');
      $prenom ="bhz";
      $nom ="mmjhhm";
function pseudo($nom, $prenom){
        $idcon=new mysqli ($GLOBALS['localhost'], $GLOBALS['root'], $GLOBALS['root'], $GLOBALS['formulaire']);
        $user_pseudo=$nom.$prenom[1].substr($prenom, 2);
/************************/
        #variable $query contient une requete permettant de sélectionner tous les élements de panier
        
/***************************************/
        $user_pseudo=strtolower("$user_pseudo");
        $idcon->close();
        return $user_pseudo;
    }

    $pseudo= pseudo($nom, $prenom);
    echo $pseudo;
    $query="SELECT * FROM panier2";
    echo $query;

$result=mysqli_query($db,$query);

foreach ($result as $key => $value) {
    echo  $value['id']."<br>";
    foreach ($value as $key => $v){ 

                }

    }
                         

/*
    echo "kk".$result;
        foreach ($result as $key => $value) {
            echo "jjj".$value;
            foreach ($value as $key => $v){ 
                echo $key." ".$v."<br>";
                if($v !=0){
            $pseudo = $pseudo."-".$v;
                }
            }
        }
    echo "$pseudo";

session_start();
$connect=mysqli_connect("localhost","root","root","formulaire");
$v="ddd";
#variable $query contient une requete permettant de sélectionner tous les élements de panier
$query="SELECT COUNT(`pseudo`) FROM `reservation` WHERE `pseudo` = '$v'";
                        #$result contient résultat d'une commande permettant d'executer la requete query
$result=mysqli_query($connect,$query);

foreach ($result as $key => $value) {
    foreach ($value as $key => $v){ 
        echo $key." ".$v."<br>";
        if($count !=0){
            $user_pseudo = $user_pseudo."-".$count;
        }
    }
}


$sql1="SELECT * FROM `reservation` WHERE `pseudo` LIKE $pseudo";
        $result=mysqli_query($sql1,$db);
        echo $result;
        $resul=$idcon1->query($sql1);
        $count = $resul->num_rows;
*/
    ?>
        </body></html>