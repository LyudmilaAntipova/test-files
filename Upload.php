<!DOCTYPE html>
<html>
  <head>
        <title>Отправка файлов на сервер</title>
    <body>
        <form action="Upload.php" method="post" enctype="multipart/form-data">
    <p>Файлы:<br />
        <input name="ufile" type="file[]" multiple="true" /><br />
    <input type="submit" value="Отправить" /><br />
    </p>
       </form>
    </body>
  </head> 
</html>

<?php
foreach($_FILES['ufile']['error'] as $key => $error)
{
    if($error == UPLOAD_ERR_OK)
    {
        echo '<pre>';
        print_r($_FILES);
        echo '<pre>';
        $tmp = $_FILES["ufile"]["tmp_name"][$key];
        $name = $_FILES["ufile"]["name"][$key];
        move_uploaded_file($tmp,"uploads/".$name);
    }
    echo 'Путь к заргуженным файлам uploads/'.$name;
    echo '<br/>';
}