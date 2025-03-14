  
<?php
require_once "config/config.php";
require_once "controllers/UserController.php";
require_once "models/User.php";

$app = new UserController();
$app->all();
?>