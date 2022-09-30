<?php

// créationde constante en php ex: DBHOST

define('DBDRIVER','mysql'); // le type de db
define('DBHOST','localhost'); // l'hebergeur de la db : localhost ou un ip
define('DBPORT', 3306); // le port où il écoute; l'ordi écoute: le port générique est 3306
define('DBNAME', 'wadfilms'); // nom de la db
define('DBCHARSET','utf8');
define('DBUSER','root');
define('DBPASS','');

// pour appeller une constante: sans le $ : echo DBDRIVER