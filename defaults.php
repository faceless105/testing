<?php

//This is where I define all of the site settings

//database connection
$conn = new PDO("pgsql:host=rio.local;dbname=localtesting;port=5432;user=jsly;password=slyj1084");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//global includes
define('BASE_URL', 'http://www.whatever.com', TRUE);

//system/site wide varaibles
include('tests.php');

?>
