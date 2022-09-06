<!--OUNISSI , CHEN , BAYO  -->
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, intiale-scale=1.0">
		<title>JINISS-ASIANFOOD</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="CSS/styles.css">
		<link rel="stylesheet" type="text/css" href="CSS/panier.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script type="text/javascript" src="js/java1.js"></script>


</head>


<!--*****************html***********************************************-->
	<body>
		<nav class="liens_menu" id="liens_menu">
			<a href="accueil_version2.html" class="logo">Jiniss</a>
			<input type="checkbox" id="icon">
			<label for="icon">
				<i  class="fa fa-bars" id="barres"></i>
				<i  class="fa fa-times" id="cancel"></i>
			</label>
			<ul>
        		<li class="menu-items"><a href="menu.php">Menu</a></li>
		    	<li class="menu-items"><a href="presentation.html">Présentation</a></li>
				<li class="menu-items"><a href="reservation.html">Réserver</a></li>
				<li class="menu-items"><a href="commandefin.html"><span class="fa fa-shopping-basket"></span></a></li>
			</ul>
		</nav>

		<!-- *************************************************************** -->


		<?php
		#permet de créer une session ou de récupérer celle déja présente sur le serveur
		session_start();
		#Connexion à la base de donnée gestion_panier
		$connect=mysqli_connect("localhost","root","root","gestion_panier");

		#Si l'élement ajoutepanier a bien été récupéré 
		if(isset($_POST['ajouterpanier'])){
			#Si la session panier existe
			if(isset($_SESSION['panier'])){
				#variable $session_array_column liste contenant les id des elements du panier
				$session_array_id=array_column($_SESSION['panier'],"id");
				#Si L'id récupéré n'est pas dans la liste, c'est à dire, l'element n'est pas déja dans le panier
				if(!in_array($_GET['id'], $session_array_id)){
					#création d'une liste $session_array contenant les informations de l'élement que l'on souhaite ajouté
					$session_array=array(
					"id"=>$_GET['id'],
					"nom"=>$_POST['nom'],
					"prix"=>$_POST['prix'],
					"qte"=>$_POST['qte'],
					"image"=>$_POST['image']
				);
				#La liste $session_array est entrée dans la session panier
				$_SESSION['panier'][]=$session_array;
				}
			#Si la session panier n'existe pas déja
			}else{
				#création d'une liste $session_array contenant les informations de l'élement que l'on souhaite ajouté
				$session_array=array(
					"id"=>$_GET['id'],
					"nom"=>$_POST['nom'],
					"prix"=>$_POST['prix'],
					"qte"=>$_POST['qte'],
					"image"=>$_POST['image']
				);
				#La liste $session_array est entrée dans la session panier
				$_SESSION['panier'][]=$session_array;
			}
		}
		?>

		<!-- ************************************************************* -->
        <header class="header_menu">
        	<p>Vous retrouvez dans ce menu toutes les grandes spécialités de la cuisine asiatique </p>
			<a href="reservation.html">Venez réserver une table chez nous</a>
			<h4>RESTAURANT ASIAN-FUSION</h4>
		</header><!-- *******************onglet commande ****************************-->

		<?php
		$total=0;
		#$output variable qui décrit la mise en forme du panier
		$output="<div class='dashboard-order'>
			<h2>Panier de commande</h2><div class='order-wrapper'>";
   		
   		#Si la session panier n'est pas vide
   		if(!empty($_SESSION['panier'])){
   			#pour chaque élément de la session panier sous la forme de clés et leur valeurs. $key et $value sont des listes contenant respectivement les clés et les valeurs de chaque élément de la session panier
   			foreach ($_SESSION['panier'] as $key => $value){
   				#$output est concatené à une chaine de caractère contenant les instructions de mise en forme que doivent prendre chaque ligne de la patie déroulantedu panier
   				$output.="<div class='order-card'>
					<div class='order-detail'>
						<p>".$value['nom']."</p>
						<a href='menu.php?action=suppressionart&id=".$value['id']."'><i class='fa fa-times'></i></a> <input type='text' value=".$value['qte'].">
					</div>
					<h4 class='order-price'>".$value['prix']."€</h4>
					</div>
				";#concaténation d'une chaine et de valeurs. Par exemple, $value['id'] correspond à la valeur de l'id de l'élément considéré
				#variable total indique le prix total du panier
				$total=$total+$value['qte']*$value['prix'];
   			}
   			#$output est concatené à une autre chaine qui cette fois indique comment doit se présenter la partie inférieure du panier
   			$output.="<a href='menu.php?action=suppressionpan'><i class='fa fa-trash'></i></a></div><hr class='divider'>
          		<div class='order-total'>
            	<p>Total<span>".number_format($total,2)."</span></p>
         		</div><a href='commandefin.html'><button class='checkout'>Payer</button></a>
      			</div>";#
      	#Si la session panier est vide
		}else{
			#$output indique le panier est vide
      		$output.="Panier vide.</div></div>";

   		}
   		#affichage de la variable $output
   		echo $output;


   		#S'il y a bien récupération de action par URL
   		if(isset($_GET['action'])){
   			#Si l'action est 'supressionpan'
   			if($_GET['action']=='suppressionpan'){
   				#La session panier sera supprimé donc le panier sera vidé.
   				unset($_SESSION['panier']);
   			}
   			#Si l'action est 'supressionart'
   			if($_GET['action']=='suppressionart'){
   				#pour chaque élément de la session panier sous la forme de clés et leur valeurs
   				foreach ($_SESSION['panier'] as $key => $value) {
   					#Si la valeur de l'id récupéré correspond à celle d'un élément de la session panier
   					if($value['id']==$_GET['id']){
   						#L'élément trouvé est supprimé à l'aide de sa clé $key
   						unset($_SESSION['panier'][$key]);
   					}
   				}		
   			}	
   		}
    	?>
				
						<?php
						#variable $query contient une requete permettant de sélectionner tous les élements du panier
						$query="SELECT * FROM panier2";
						#$result contient résultat d'une commande permettant d'executer la requete query dans la base de donnée
						$result=mysqli_query($connect,$query);
		                #Tant que la commande fonctionne. Cette commande récupère la ligne suivante d'un ensemble de résultat

						while($row=mysqli_fetch_array($result)){?>
							<div class="menu">
							<table>
							<form method="post" action="menu.php?id=<?=$row['id']?>">
							<tr ><td width="397px"><?=$row['nom'];?></td><td><?= number_format($row['prix'],2);?>€</td><td><figure><img height="150px" width="150px" src="<?=$row['image'];?>" alt="image"></figure></td><td><input type="hidden" name="nom" value="<?=$row['nom'];?>">
							<input type="hidden" name="prix" value="<?=$row['prix'];?>"><input type="hidden" name="image" value="<?=$row['image'];?>"></td><td><input type="number" name="qte" value="1" style="width: 35px;height: 35px;text-align: center;border:2px solid grey;border-radius:10px;background-color: transparent; margin-left: 10px;"></td><td><input type="submit" style="border:none" name="ajouterpanier" id="env1" class="env" value="Ajouter au panier" placeholder="Ajouter au panier"></td>
                       </form>
						<?php }
			?>
			</tr></table></div>

		

</body>
</html>