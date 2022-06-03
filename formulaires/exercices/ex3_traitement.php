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
        $num = mt_rand(0,10);
        print $num;
        $user_num = $_POST['number'];
        if ($user_num == $num){
            print '<img src="./images/winner.jpg" style="max-width:30%">';
            print "Bravo, vous avez gagné !";
        }
    ?>
</body>
</html>