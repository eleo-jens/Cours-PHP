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
        $genereFonctionLotto = function (int $min, int $max): callable
        {

            return (function (int $nb) use ($min, $max)
            {
                $array = [];
                for ($i = 0; $i < $nb; $i++)
                {
                    $array[] = mt_rand($min, $max);
                }
                return $array;
            });
        };

        $lotto50 = $genereFonctionLotto(1,50);
        var_dump($lotto50(6));
        var_dump($lotto50(2));

        $lotto100 = $genereFonctionLotto(1,100);
        var_dump($lotto100(10));
        var_dump($lotto100(5));
    ?>
</body>
</html>