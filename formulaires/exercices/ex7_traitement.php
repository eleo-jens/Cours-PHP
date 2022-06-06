<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $animal = $_POST['animal'];
        print "<img alt='Image d'un" .$animal. "'  src='./images/". $animal. ".jpg' style='max-width:40%'></img>";
    ?>
</body>
</html>