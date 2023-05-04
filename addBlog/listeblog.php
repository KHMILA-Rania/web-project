<?php
include("blog.php");
$b = new Blog();
$blogs = [];
$listeBlog = $b->listBlog();
while ($bl = $listeBlog->fetch_assoc()){
$blogs[] = $bl;
}
?>

<table>
<tr>
    <th>title</th>
</tr>
<?php 
foreach($blogs as $bb){
    ?>

    <tr>
    <td><?php echo $bb['title'] ?></td>
    </tr>
<?php
}
?>
</table>