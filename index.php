<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';

$core = new Core;
$core->run();

/*
echo "contoller: " .$core->getController();
echo "<br>Método : " .$core->getMetodo();
$parametros = $core->getParametros();
foreach ($parametros as $param)
    echo "<br>Parâmetro : " .$param;*/