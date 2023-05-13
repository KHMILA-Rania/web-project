


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addBlog.css">
</head>
<body>
    <form method="POST" action="conn.php" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>
      
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br>
      
        <label for="file">File:</label>
        <input type="file" id="file" name="file" required><br>
      
        <label for="content">Content:</label>
        <textarea  cols="50" rows="700" id="content" name="content" required> </textarea><br>

        <label for="owner">Owner :</label>
        <input type="text" id="owner" name="owner" required><br>
      
       
      
       <a href="../addBlog/listBlog.php" ><input  id="getBlog" type="submit" value="Add blog"><?php   ?></a>
      </form>
     
      
      
    
</body>


</html>