<?php
use Opensitez\Simplicity\Config;
use Opensitez\Simplicity\Framework;

require_once(__DIR__ . "/defaults.php");

$basedir = dirname(__DIR__);
$backend_dir = dirname(__DIR__) . "/backend";
require_once("$basedir/vendor/autoload.php");


$config['paths'] = [
   'frontend' => dirname(__DIR__) . "/frontend",
   'base' => dirname(__DIR__),
   'datafolder' => __DIR__ . "/data",
   'backend' => __DIR__,
   'components' => dirname(__FILE__) . "/components",
];
// Load configuration
$config_object = new Config($config);



$framework = new Framework($config_object);


$external_component_paths = [
    [
        'group' => 'app',
        'path' => dirname(__DIR__) . '/backend/components',
        'namespace' => 'cto\\components'
    ],
    [
        'group' => 'local',
        'path' => dirname(__DIR__) . '/local/components',
        'namespace' => 'App\\Components'
    ]
];

$framework->load_external_components($external_component_paths);
