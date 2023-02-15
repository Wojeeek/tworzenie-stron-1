
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="trim.php">
    <label for="spacje">spacje</label><br>
    <input type="text" id="spacje" name="spacje"><br>
    <label for="back">backs</label><br>
    <input type="text" id="back" name="back"><br>
    <label for="tag">tag</label><br>
    <input type="text" id="tag" name="tag"><br>
    <input type="submit" value="SEND">
</form>
<?php

var_dump($_POST['spaces']);
var_dump($_POST['back']);
var_dump($_POST['tag']);
?>
</body>
</html>