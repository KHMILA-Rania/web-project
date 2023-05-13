<?php
include ("blog.php");
$id='';
$conn = mysqli_connect('localhost','root', '', 'webProject');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from blog";
$result = mysqli_query($conn, $query); 

if ($result) {
?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title> BlogIt : List of blogs  </title> 
        <style>
        body {
  background-color: -webkit-linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));;
  margin: 0;
  padding: 0;
}

html,

.intro {
    width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));
}

.gradient-custom-1 {
  /* fallback for old browsers */
  /*background: #cd9cf2;*/

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1))
}
table{
    border: 5px solid black;
    padding: 70px;
    margin:70px;
    width: 90%;
    height: 100%;
    
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  padding: 10px;
  border: 3px solid ;
  color: black;
}
tbody td {
  font-weight: 500;

}
table tr {
    padding: 20;
    margin: 30;
    width: 50%;

}
#delete{
  background-color:cornflowerblue;
  display: flex;
  flex-direction: row;
  padding: 5px;
  align-items: center;
}
.table-responsive{
    overflow: auto;
}
        </style> 
	</head> 
	<body> 

    <section class="intro">
        <div class="gradient-custom-1 h-100">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="table-responsive bg-white">
                                <table class="table mb-0">
                                    <thead>
                                        <tr> 
                                            <th colspan="5"><h2>List of blogs <br> Have fun reading !</h2></th> 
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <th> Title </th> 
                                        <th> Description </th> 
                                    
                                        <th> owner </th> 
                                        <th> Read more </th>
                                        <th> Action </th> 
                                        

                                        </tr> 

                                        <?php while($rows=mysqli_fetch_assoc($result)) {
                                          ?> 
                                        <tr>
                                            <td><?php 
                                            echo $rows['title']; ?></td> 
                                            <td><?php echo $rows['description']; ?></td> 
                                         
                                            <td><?php 
                                                $r = $rows['owner']; 
                                                $q = mysqli_query($conn, "select name from blogger where id='$r'");
                                                if ($row = mysqli_fetch_assoc($q)) {
                                                    echo $row['name'];
                                                }
                                                mysqli_free_result($q); 
                                            ?></td> 
                                             <td> <a href="content.php" >Get content </a></td>
                                        
                                            <td>
                                                <form method="POST">
                                                    <input type="hidden" name="blog_id" value="<?php echo $rows['id']; ?>">
                                                    <button type="submit" name="delete" id="delete">Delete</button>
                                                </form>
                                            </td>
                                            </tr
                                           
                                        <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>

<?php
} else {
    echo "Error: " . mysqli_error($conn);
}

//mysqli_close($conn);

if(isset($_POST['delete'])){
    $blog_id = $_POST['blog_id'];
    $query = "DELETE FROM blog WHERE id = $blog_id";
    $result = mysqli_query($conn, $query);
    if($result) {
        echo "<script> window.location.assign('listBlog.php'); </script>";
    } else {
        echo "Error deleting blog: " . mysqli_error($conn);
    }
}
?>