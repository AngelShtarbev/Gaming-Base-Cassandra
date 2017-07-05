<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

use Yee\Managers\DatabaseManager;
use Yee\Managers\RoutingCacheManager;
use Yee\Views\TwigExtension;
use Yee\Yee;

session_start();

error_reporting( E_ALL );


// Instantiate the app
$config = require __DIR__ . '/../config.php';
$app = new Yee($config);
$app->setName('bomb');
$app->view( new \Yee\Views\Twig());

$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => __DIR__ . '/../cache/templates_c',
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);

$app->view->parserExtensions = array(new TwigExtension());

/* we need the session variable exposed within templates */
$twig = $app->view()->getEnvironment();

$twig->addGlobal('session', $_SESSION);




new DatabaseManager();

new RoutingCacheManager(
    array(
        'cache' => __DIR__ . '/../cache/routing',
        'controller' => array( __DIR__ . '/../App/Controllers' )
    )
);

$app->container->set('games',new \App\Models\GamesModel());
$app->container->set('games_db',new \App\Models\GamesDBModel());
$app->container->set('platforms_db',new \App\Models\PlatformsDBModel());
$app->container->set('platforms', new App\Models\PlatformsModel());
$app->container->set('reviews', new App\Models\ReviewsModel());
$app->container->set('reviews_db',new \App\Models\ReviewsDBModel());
$app->container->set('videos', new App\Models\VideosModel());
$app->container->set('videos_db',new \App\Models\VideosDBModel());
// Run app
$app->execute();

