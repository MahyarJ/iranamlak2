<?php

include_once 'database/cities.php';

$name = getAllTheCities($_GET['state']);

echo json_encode($name);