<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 27/07/16
 * Time: 12:23 PM
 */
require __DIR__ . '/vendor/autoload.php';
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;    

//$cacheDir = '/var/folders/3r/g9d8t2px60g_q77jwcqs058h0000gp/T';
//$cacheDir = __DIR__.'/src/proxies';
$cacheDir = '/tmp/';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir);
}

$paths = [__DIR__.'/src/entities'];
$isDevMode = true;
// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$dbParams = $settings["settings"]["mysql"];
define("BASE_DIR", __DIR__);
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $cacheDir);
$config->setAutoGenerateProxyClasses(true);
$entityManager = EntityManager::create($dbParams, $config);
// replace with mechanism to retrieve EntityManager in your app

return ConsoleRunner::createHelperSet($entityManager);
