<?php
class blog {
private $conn;
function __construct() {
    $this->conn = mysqli_connect('localhost','root', '', 'webProject');
}
    function listBlog(){
           return $this->conn->query("select * from blog");
    }

}

?>