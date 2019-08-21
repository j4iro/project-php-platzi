<?php

ini_set("display_errors",1);
ini_set("display_starup_error",1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Job;
  
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost:3309',
    'database'  => 'cursophp2',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Nos permite hacer todo como si estuvieramos en el contexto global
$capsule->setAsGlobal();

// Nos permite inicializar eloquent
$capsule->bootEloquent();
echo $route = $_GET['route'] ?? '/';

if($route='/')
{
    require '../index.php';
}
else if ($route=='addJob'){
    require '../addJob.php';
}
