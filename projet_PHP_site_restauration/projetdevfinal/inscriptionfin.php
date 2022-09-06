<!--OUNISSI , CHEN , BAYO  -->
	<?php
	// connection base de donnée users
    $db = mysqli_connect("localhost", "root","root","users")
           or die('could not connect to database');
	
		 if(!empty($_POST)){
			$user=$_POST['user'];
			$mdp=$_POST['mdp'];
			$mdpConfirmation=$_POST['mdpConfirmation'];
			$adresse=$_POST['adresse'];
			$codepostal=$_POST['codepostal'];
			$pays=$_POST['pays'];
			$valid=true;

			if(!empty($mdp) && !empty(!$mdpConfirmation)){
				if($mdp!=$mdpConfirmation){
					$valid=false;
			 		$error_password="La confirmation est différente.";
				}
			 }
			 if($valid){
			$db2="INSERT INTO `users`(`user`, `mdp`, `adresse`, `codepostal`, `pays`) VALUES ('$user','$mdp','$adresse','$codepostal','$pays')";
			$idcon=mysqli_query($db,$db2);
			header('Location:commandefin.html');
			exit();
			}
		 }
	    ?>
