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
        function generate_array(): array{
            $tab = [];
            $num = mt_rand(1, 20);
            for ($i = 0; $i <= $num; $i++){
                $tab[] = mt_rand(100, 800);
            }
            return ($tab);
        }
        var_dump (generate_array());
    ?>
</body>
</html>