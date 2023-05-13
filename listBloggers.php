<?php



$conn = mysqli_connect('localhost','root', '', 'webProject');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from blogger";
$result = mysqli_query($conn, $query); 

if ($result) {
?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title> BlogIt : List of bloggers  </title> 


        <style>
.intro {
  height: 100%;
}

.gradient-custom-1 {
  /* Replace this with your desired gradient background */
  background: linear-gradient(to bottom, #4c68d7, #3b55a0);
}

.mask {
  /* Add a semi-transparent black overlay */
  background-color: rgba(0, 0, 0, 0.6);
}

table {
  /* Add some padding to the table cells */
  padding: 10px;
  border-collapse: collapse;
  width: 100%;
}

th,
td {
  /* Add borders to the table cells */
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  /* Add a gray background color to table headers */
  background-color: #f2f2f2;
  font-size: 1.2em;
}

td {
  /* Add a white background color to table cells */
  background-color: #fff;
}

td button {
  /* Style the delete button */
  background-color: #dc3545;
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 3px;
  cursor: pointer;
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
                                            <th colspan="5"><h2>List of bloggers <br> </h2></th> 
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <th> Name </th> 
                                        <th> Phone </th> 
                                    
                                        <th> Email</th> 
                                        <th> Age </th>
                                        <th> Action </th> 
                                        

                                        </tr> 

                                        <?php while($rows=mysqli_fetch_assoc($result)) { ?> 
                                        <tr>
                                            <td><?php echo $rows['name']; ?></td> 
                                            <td><?php echo $rows['phone']; ?></td> 
                                            <td><?php echo $rows['email']; ?></td> 
                                            
                                            <td><?php echo $rows['age']; ?></td> 
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


