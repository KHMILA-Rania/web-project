<?php 

function view($id){
    $conn = mysqli_connect("localhost", "root", "", "webproject");
    $result = mysqli_query($conn, "SELECT * FROM blog WHERE id = $id");
    $blog = mysqli_fetch_assoc($result);

    $file="blog" . $id . ".sql";

    $cmd="mysqldump -u root webproject blog --where=\"id=$id\" > " . $file;

    exec($cmd);

    header("Content-Disposition: attachment; filename=\"" . $file . "\"");
    header("Content-Type: application/octet-stream");
    header("Content-Length: " . filesize($file));
    readfile($file);




    //header('Content-Type: application/json');
    //echo json_encode($blog);
    
    // http://example.com/myphpfile.php?id=1
}
?>