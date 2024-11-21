<?php
define('bdserver','localhost');
define('bduser','root');
define('dbmp','');
define('bdname','hopital');
$con=mysqli_connect(bdserver,bduser,dbmp,bdname);
if (!$con)
die ('erreur');
?>