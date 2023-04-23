<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addblog.css">
</head>
<body>
    <form method="POST" action="connect.php" enctype="multipart/form-data">
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" required><br>
      
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>
      
        <label for="file">Fichier:</label>
        <input type="file" id="file" name="file" required><br>
      
        <label for="Propriétaire">Propriétaire:</label>
        <input type="text" id="owner" name="owner" required><br>
      
        <label for="date">Date de publication:</label>
        <input type="date" id="date" name="date" required><br>
      
        <input type="submit" value="Ajouter l'article">
      </form>
      
      
    
</body>


</html>