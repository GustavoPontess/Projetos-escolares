<?php
require_once "inc/config.php";
require_once "controller/UsuarioController.php";
require_once "model/conexao.php";

$app = new UsuarioController();
$app->all();