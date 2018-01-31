<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    mysql_connect('localhost', 'root', '') or die('Cannot connect');

    $id = mysql_real_escape_string($_POST['id']);
    $title = mysql_real_escape_string($_POST['title']);
    $body = mysql_real_escape_string($_POST['body']);
    $image_url = mysql_real_escape_string($_POST['image_url']);
    
    mysql_select_db('blog') or die('fail db connect');

    mysql_query("update posts set title='$title', body='$body', updated_at=NOW(), image_url='$image_url' where id=$id") or die(mysql_error());
    
    header("Location: index.php");
    exit();
}

?>