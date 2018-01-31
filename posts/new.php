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
            <h1 class='text-center'>Создать пост</h1>
            <form action='create.php' method='POST'>
                <div class="form-group">
                    <label for="title">Название: </label>
                    <input class='form-control' type="text" name="title"/>
                </div>
                <div class="form-group">
                    <label for="body">Текст: </label>
                    <input class='form-control' type="text" name="body"/>
                </div>
                <div class="form-group">
                    <label for="image_url">Изображение(url): </label>
                    <input class='form-control' type="text" name="image_url"/>
                </div>
                <input class='btn btn-primary' type="submit" value="Создать"/>
            </form>
        </div>
    </body>
</html>
