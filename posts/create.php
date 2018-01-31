<html>
<meta charset="utf-8">
</html>
<?php

// print '<script>alert($method)</script>';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    mysql_connect('localhost', 'root', '') or die('Cannot connect');

    $title = mysql_real_escape_string($_POST['title']);
    $body = mysql_real_escape_string($_POST['body']);
    $image_url = mysql_real_escape_string($_POST['image_url']);
    
    mysql_select_db('blog') or die('fail db connect');

    $result = mysql_query("insert into posts (title, body, updated_at, image_url) values ('$title', '$body', NOW(), '$image_url')");
    
    header("Location: index.php");
    exit();


}


?>
