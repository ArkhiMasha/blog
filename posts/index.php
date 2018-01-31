<html>
    <meta charset="utf-8">
    <head>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
        <div class="container">
            <h1 class='text-center' style='margin: 2em;'>Список постов</h1>
      <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            mysql_connect('localhost', 'root', '') or die('Cannot connect');
            mysql_select_db('blog') or die('fail db connect');

            $sql_select = "SELECT * FROM posts";
            $result = mysql_query($sql_select);

                
                while($data = mysql_fetch_array($result)){
                    echo '<div id="card' . $data['id'] . '" class="card mx-auto" style="width: 30rem; margin: 1em;">';
                    echo '<img class="card-img-top" src=' . $data['image_url'] .' style="width: 100%; " >';
                    echo '  <div class="card-block">';
                    echo '<h4 class="card-title">' . $data['title'] . '</h4>';
                    echo '<p class="card-text"><small class="text-muted">Пост изменен ' . $data['updated_at'] . '</small></p>';
                    echo '<p class="card-text">' . $data['body'] . '</p>';
                    echo '<a href="edit.php?id=' . $data['id'] . '"   class="change_button btn btn-success">Изменить</a>';
                    echo '<a href="#" class="delete_button btn btn-danger" data-id="' .$data['id'] . '" >Удалить</a>';
                    echo '</div>';
                    echo '</div>';
                }
          
        }
      ?>
            <div class='text-center'>
                <a href="new.php" class="delete_button btn btn-primary" style="margin: 2em; width: 30rem;">Создать</a>
            </div>
      </div>
    </body>
</html>