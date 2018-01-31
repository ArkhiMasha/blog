<?php
    if($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        $link = mysqli_connect('localhost', 'root', '', 'blog') or die('Cannot connect');
        parse_str(file_get_contents("php://input"), $del_vars);
        $id = $del_vars['id'];
 
        $query ="DELETE FROM posts WHERE id = '$id'";
        
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        mysqli_close($link);
        echo($id);
    }    
?>
