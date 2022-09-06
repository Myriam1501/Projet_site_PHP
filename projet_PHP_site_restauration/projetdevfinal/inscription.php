<!--OUNISSI , CHEN , BAYO  -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, intiale-scale=1.0">
        <title>JINISS-ASIANFOOD</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="CSS/styles.css">
        <link rel="stylesheet" type="text/css" href="CSS/styles_version2_2.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/java1.js"></script>
    </head>
       <body>
        <nav class="liens_menu" id="liens_menu">
            <a href="accueil_version2.html" class="logo">Jiniss</a>
            <input type="checkbox" id="icon">
            <label for="icon">
                <i  class="fa fa-bars" id="barres"></i>
                <i  class="fa fa-times" id="cancel"></i>
            </label>
            <ul>
                <li class="menu-items"><a href="menu.html">Menu</a></li>
                <li class="menu-items"><a href="presentation.html">Présentation</a></li>
                <li class="menu-items"><a href="reservation.html">Réserver</a></li>
            </ul>
        </nav>
        <div class="formulaire2">
                <h1>Formulaire de réservation</h1>
                <p>Pour tout problème ou question n'hésitez pas à nous conctacter par téléphone au 0936488523, par mail ou sur nos réseaux sociaux, se trouvant en bas de page.</p>
                <form name="form" action="TEST.php" method="post">
                    <div>
                        <h2>Votre demande a bien été prise en compte</h2></div>
            
            
      <?php
#crée une connexion avec la base de donnée dont le serveur est localhost le nom d'utilisateur est root , le mot de passe est root et le nom de la base de donnée est formulaire. Si le connexion ne se fait pas il envoie un message d'erreur.

        $db = mysqli_connect("localhost", "root", "root","formulaire")
           or die('could not connect to database');

if(isset($_POST['inscrire']))
   {
    if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['pays'])AND isset($_POST['adresse']) AND isset($_POST['codepostal']) AND isset($_POST['nbreservation']) AND isset($_POST['mail']) AND isset($_POST['telephone']) AND isset($_POST['demande']))
    {
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['pays'])AND !empty($_POST['adresse']) AND !empty($_POST['codepostal']) AND !empty($_POST['nbreservation']) AND !empty($_POST['mail']) AND !empty($_POST['telephone']) AND !empty($_POST['demande']))
        {
           #si inscrire existe 
//if(isset($_POST['inscrire']))
 //  {
    #si nom, prenom, horrairen, adressen, codepostal, nbreservation, mail, telephone, demande existent 
//    if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['horaire'])AND isset($_POST['adresse']) AND isset($_POST['codepostal']) AND isset($_POST['nbreservation']) AND isset($_POST['mail']) AND isset($_POST['telephone']) AND isset($_POST['demande']))
  //  {
        #si nom, prenom, horrairen, adressen, codepostal, nbreservation, mail, telephone, demande ne sont pas vide 
    //    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['horaire'])AND !empty($_POST['adresse']) AND !empty($_POST['codepostal']) AND !empty($_POST['nbreservation']) AND !empty($_POST['mail']) AND !empty($_POST['telephone']) AND !empty($_POST['demande']))
     //   {
        #variable $nom est égale à la valeur nom récupérer dans le formulaire avec la méthode post 
        $nom=htmlspecialchars($_POST['nom']);
        #variable $prenom est égale à la valeur prenom  récupérer dans le formulaire avec la méthode post 
        $prenom=htmlspecialchars($_POST['prenom']);
        #variable $horaire est égale à la valeur horaire récupérer dans le formulaire avec la méthode post 
        $horaire=htmlspecialchars($_POST['horaire']);
        #variable $adresse est égale à la valeur adresse récupérer dans le formulaire avec la méthode post 
        $adresse=htmlspecialchars($_POST['adresse']);
        #variable $codepostal est égale à la valeur codepostal récupérer dans le formulaire avec la méthode post 
        $codepostal=htmlspecialchars($_POST['codepostal']);
        #variable $nbreservation est égale à la valeur nbreservation récupérer dans le formulaire avec la méthode post 
        $nbreservation=htmlspecialchars($_POST['nbreservation']);
        #variable $mail est égale à la valeur mail récupérer dans le formulaire avec la méthode post 
        $mail=htmlspecialchars($_POST['mail']);
        #variable $telephone est égale à la valeur telephone va récupérer dans le formulaire avec la méthode post 
        $telephone=htmlspecialchars($_POST['telephone']);
        #variable $demande est égale à la valeur demande récupérer dans le formulaire avec la méthode post 
        $demande=htmlspecialchars($_POST['demande']);

#création d'une fonction pseudo qui prend on argument les variable $nom et $prenom
function pseudo($nom, $prenom){
    #rajoute les données de connexion de la base de donnée dans les variables à l'aide de $GLoblas
        $idcon=new mysqli ($GLOBALS['localhost'], $GLOBALS['root'], $GLOBALS['root'], $GLOBALS['formulaire']);

        #attribut à la variable $user_pseudo la variable $nom concaténée à la lettre numéro 2(position 1) de prenom concéténée à la variable prenom de la lettre 3 à la fin (position 2 à la fin)
        $user_pseudo=$nom.$prenom[1].substr($prenom, 2);
        $user_pseudo=strtolower("$user_pseudo");
        $idcon->close();
        return $user_pseudo;
    }
#faire tourner la fonction
    $pseudo= pseudo($nom, $prenom);

    $query="SELECT COUNT(`pseudo`) FROM `reservation` WHERE `pseudo` LIKE '$pseudo%'";

# la variable query récupère le nombre de pseudo similaire a celui entrer. 
$result=mysqli_query($db,$query);

# foreach va recuperer le nbr de pseudo
foreach ($result as $key => $value) {
    foreach ($value as $key => $v){ 
        # verifie qu'il n'y a pas de pseudo similaire
        if($v !=0){
            #si il y en a il va mettre un - puis le nombre pour le distinguer des autres.
            $pseudo = $pseudo."-".$v;
                }
            }
        }                               
}}}


    /***************************************************************************************************************/

#variable $query contient une requete permettant de donner le nombre de pseudo similaire à celui entrer par l'utilisateur
$query="SELECT COUNT(`pseudo`) FROM `reservation` WHERE `pseudo` = '$pseudo'";

#$result contient résultat d'une commande permettant d'executer la requete query
$result=mysqli_query($db,$query);
# foreach va aller récuperer la valeur 
foreach ($result as $key => $value) {
    foreach ($value as $key => $v){ 
        #si le pseudo n'a jms été etrer il affiche un message de confirmation et la fait rentrer dans la base de donnée 
        if($v==0){
            echo "la réservation au nom ".$nom." ".$prenom." a été ajouté à la table avec le pseudo ".$pseudo;
            #la variable $sql récupère la requette. la requette va inserer dnas la table reservation dans les élement de la table (telephone, mail, pseudo, nom, prenom, adresse, codepostal, horaire, nbreservation, demande) les valeur récuper par le formulaire avec la méthode poste'$telephone','$mail','$pseudo','$nom','$prenom','$adresse','$codepostal','$horaire','$nbreservation','$demande')
            $sql="INSERT INTO `reservation`(`telephone`, `mail`, `pseudo`, `nom`, `prenom`, `adresse`, `codepostal`, `horaire`, `nbrreservation`, `demande`) VALUES ('$telephone','$mail','$pseudo','$nom', '$prenom','$adresse','$codepostal','$horaire','$nbreservation','$demande')";

            $idcon=mysqli_query($db,$sql);
        }
        #sinon il indique qu'il y a et ne le rajoute pas 
        else{
            echo "un problème est survenu.";
        }
    }
}

    ?>
</div></form>
        <footer>
            <div class="footer_content">
                    <h2>JINISS</h2>
                        <a href="https://www.google.com/maps/place/140+Rue+de+Vaugirard,+75015+Paris/@48.8447698,2.3163806,17z/data=!3m1!4b1!4m5!3m4!1s0x47e67032f9dbfcb7:0xf8a08628a40abd37!8m2!3d48.8447698!4d2.3185693" class="links">140 rue Vaugirard 75015 Paris</a>              
                        <a href="tel:+33900000000" class="links">09 36 48 85 23</a>             
                        <a href="mailto:Jiniss.asianfood@gmail.com" class="links">Jiniss.asianfood@gmail.com</a>
                        <p>LUNDI DU SAMEDI</p>
                        <p>11H-15H ET 18H-23H</p>
                        
                        <a href="reservation.html" class="links">Réservation</a>
                        
                    <ul class="socials">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </ul>
            </div>              
        </footer>
        </body>
    </html>