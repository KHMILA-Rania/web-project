<?php
// Connexion à la base de données



// Vérification de la connexion à la base de données
/*if (!$conn) {
  die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}
echo "merciiiiii !" ; */

// Récupération des données du formulaire
$title = $_POST['title'];
$description = $_POST['description'];
//$fichier = $_FILES['file']['name'];

// Traitement du fichier téléchargé
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
//move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);


$conn = mysqli_connect('localhost','root','', 'blog');

// Insertion des données dans la base de données
$query =mysqli_query($conn,"INSERT INTO `addblog` (`title`, `description`)
VALUES ('$title','$description')");




/*
 if ($res) {
  echo "Le nouvel article a été ajouté avec succès.";
} else {
  echo "Une erreur s'est produite lors de l'ajout du nouvel article.";
}*/

 
?>

