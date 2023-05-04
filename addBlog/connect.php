
<?php



if(isset($_POST)){
    

$conn = mysqli_connect('localhost','root', '', 'webProject');


if (!$conn) {
  die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}
$title = $_POST['title'];
$description = $_POST['description'];
$content=$_POST['content'];

$owner = $_POST['owner'];

// Traitement du fichier téléchargé
$target_dir = "Desktop/";

$fileName=basename($_FILES["file"]["name"]);
$target_file = $target_dir . $fileName;
$fileType=pathinfo($target_dir,PATHINFO_EXTENSION);
//


if(!empty($_FILES["file"]["name"])){
  $allowTypes=array('jpg', 'png', 'gif','pdf');
  if(in_array($fileType,$allowTypes)){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
      $query=mysqli_query($conn,"INSERT INTO `blog`(`title`,`description`,`file`,`owner`,`date`,`content`) 
      VALUES ('$title','$description','$fileName','$owner',NOW(),'$content')");
      
      
      
      
      
    }

  }
}}
?>