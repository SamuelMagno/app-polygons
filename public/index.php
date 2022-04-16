<?php
require_once(__DIR__.'/../app/Models/Poligono.php');
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use app\Models\Poligono;
use App\Models\Retangulo;
use App\Models\Quadrado;
use App\Models\RetanguloLSP;
use App\Models\QuadradoLSP;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/



$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo $retangulo->getArea();

echo '<br/>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
// $quadrado->setLargura(10);

echo $quadrado->getArea();

echo '<br/>';

//Gera erro
$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo $retangulo->getArea();

echo '<br/> LSP Retangulo <br/>';

$poligono = new Poligono();
$poligono->setForma(new RetanguloLSP());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo $poligono->getArea();

echo '<br/> LSP Quadrado <br/>';

$poligono = new Poligono();
$poligono->setForma(new QuadradoLSP());
$poligono->getForma()->setLargura(10);
echo $poligono->getArea();
