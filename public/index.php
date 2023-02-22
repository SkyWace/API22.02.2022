<?php
require '../vendor/autoload.php';

//define('DEBUG_TIME', microtime(true));

/*$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();*/

$router = new App\Router(dirname(__DIR__) . '/view');
$router
    //connexion
    ->get('/logout', 'auth/logout', 'logout')
    ->match('/login', 'auth/login', 'login')
    ->match('/', 'Cube2', 'first')
    ->match('/sign-up', 'auth/sign-up', 'sign-up')
    ->match('/FirstTable', 'table/FirstTable', 'FirstTable')
    ->match('/SecondTable', 'table/SecondTable', 'SecondTable')
    ->match('/graph', 'table/graph', 'graphe')
    ->match('/gpt', 'table/gpt', 'gpt')
    ->run();