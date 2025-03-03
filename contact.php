<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<title>Formulaire de contact</title>
	<link rel="stylesheet" href="styles/messtylesContact.css">

</head>
<body>

<a href="index.php"><img class="logo" src="images/cv.png" title="Retour au C.V."></a><br><br>


	<h1>Formulaire de contact</h1>


 <form action="#" method = "post">
        Nom*: 
        <input class="inputperso" type="texte" name="nom" placeholder="Prénom Nom" id="nom" autofocus tabindex="1"  required><br><br>
        
        Adresse mail*: 
		<input class="inputperso" type="email" name="email" placeholder = "inclure @ dans l'adresse mail et le nom de domaine" tabindex="2" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"><br><br>
       
        Message*:<br>
       <textarea class= "textareaperso" name="message" tabindex="3" required></textarea><br><br>

		
		J'accepte que mes donn&eacute;es soient conserv&eacute;es:
        <select name="consentement">
            <option value="Non">Non</option>
            <option value ="Oui">Oui</option>
        </select><br><br>

        <input type="submit" name="envoi">
        <input type="reset">
</form>

<?php

if (isset($_POST['envoi']))
{
echo('Mail envoyé<br>');
mail("l.mafaut@gmail.com", "Formulaire de contact","nom: ". $_POST['nom'] . "\nEmail: " . $_POST['email'] . "\nMessage du contact: " . $_POST['message']);
}
	
if (isset($_POST['consentement']) && $_POST['consentement'] == "Oui")
{
		//Connexion à la base de données
		$pdo = new PDO('mysql:host=localhost;dbname=CV','root', 'root');
		
		//Préparation de les données val1 … val7 sont des valeurs transitoires sans lien avec le reste du code ou la table
		// on associe le champ de la table Visiteurs aux valeurs transitoires
		$sql = "INSERT INTO Visiteurs (email,nom,message,dateInsertion) VALUES (:val1,:val2,:val3,:val4)";
		$stmt = $pdo->prepare($sql);

		//exécution de la requête - On donne la valeur à val1 … val7 à partir des variables récupérées dans le formulaire
		$stmt->execute(array('val1'=>$_POST['email'],'val2'=>$_POST['nom'],'val3'=>$_POST['message'],'val4'=>time()));
		echo '<script>';
		echo "console.log('ça y passe');";
		echo '</script>';

}
?>
</body>
</html>