<!DOCTYPE = html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        for ($i = 1; $i <= 6; $i++){
            print "<img src='./images/image" .$i. ".jpg' style = 'max-width:30%'>";
        }
    ?>

    <?php
        $dir = "./images/";

        $tab = scandir($dir); //returns an array of files and directories of the specified directory
        var_dump($tab);
        foreach ($tab as $images){
            print "<img src='./images/" .$images. "' style = 'max-width:30%'>";
        }
    ?>
</body>
</html>