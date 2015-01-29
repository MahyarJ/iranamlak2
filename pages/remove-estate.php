<?php

session_start();
require_once 'core/PostData.php';
include_once 'core/database.php';


$id = getValue('id');
$uid = $_SESSION['uid'];

$query = "DELETE FROM `estate` WHERE `id`='$id' AND `uid`='$uid'";

doquery($query);

header("Location: ./?panel=my-estates");