<?php
    declare(strict_types=1);
?>

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
        $login = $_POST['login'];
        $password = $_POST['pass'];
        var_dump($login);
        var_dump($password);
        
        CapitaliseInfo(VerifyInfo($login, $password), $login, $password);

        function VerifyInfo(string $login, string $pass): bool 
        {
            if ($login && $pass){
                if(strlen($login) >= 8 || strlen($login) >= 30 && strlen($pass) >=8 || strlen($pass) <=30)
                {
                    if(ctype_alnum($login) && ctype_alnum($pass))
                    return true;
                }
            }
            return false;
        }
        
        function CapitaliseInfo(bool $result, string $login, string $pass): void
        {
            if($result == true){
                print("<p>" .strtoupper($login). " ". strtoupper($pass) ."</p>");
            }
            else
            {
                print("Informations incorrectes");
            }
        }
        ?>
</body>
</html>