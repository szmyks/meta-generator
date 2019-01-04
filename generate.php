<?php 

error_reporting(-1);
ini_set('display_errors', 'On');

if(!isset($_POST["author"])) die();

include_once 'gMeta.php';

gMeta($_POST);
