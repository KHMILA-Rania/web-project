<?php
include "conn.php";
$conn = mysqli_connect('localhost', 'root', '', 'webProject');
$id = $_GET['id'];
$sql = "DELETE FROM blog WHERE id=$id";
if(mysqli_query($conn, $sql)){
    echo "Blog deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>