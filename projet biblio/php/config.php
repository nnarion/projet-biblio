<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'biblio');
 
/* tentative de connexion */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// verification de la connexion //
if($link === false){
    die("ERROR: Erreur de connexion " . mysqli_connect_error());
}
?>