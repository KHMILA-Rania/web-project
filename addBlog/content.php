<?php
include 'conn.php';
include 'listBlog.php';
$conn = mysqli_connect('localhost','root', '', 'webProject');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT  id from blog ";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
    $id= $row['id'] ;
}

$query = "SELECT  content from blog where id='$id' ";
$query1="select file from blog";
$result = mysqli_query($conn, $query); 
$result1 = mysqli_query($conn, $query); 
if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {?>
       <div id="content"><?php echo $row['content'] . "<br>"; ?></div>
  <?php  }
}
    


?>



<style>

    #content {
        align-items: center;
        text-align: center;
        padding: 30px 20px;
        margin: 30px 300px;
        border: 1px solid black;
        background-color:lightgoldenrodyellow;
        height: 100%;
        
    }
    </style>

<?php die("Script failed."); ?>