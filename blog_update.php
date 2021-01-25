<?php
require_once('blog.php');

// $str = $_POST['content'];
$blogs = $_POST;


$blog = new Blog();
$blog->blogValidate($blogs);
$blog->blogUpdate($blogs);
?>
<p><a href="/">戻る</a></p>