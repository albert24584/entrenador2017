<?php
require_once "vendor/autoload.php";
require_once "controler/load.php";
require_once "model/load.php";
require_once "config.php";

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new \Slim\Container($configuration);

$app = new Slim\App($c);

//Dependencias
$c = $app->getContainer();
$c['view'] = function(){
    global $c;
    $renderer = new Slim\Views\PhpRenderer('view');
    $renderer->addAttribute("BASE_URL", $c->get('request')->getUri()->getBasePath());
    return $renderer;
};

$c['data'] = function(){
    global $db;
    $dataAccess = new DataAccess($db);
    return $dataAccess;
};

$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "users" => [
        "admin" => "admin"
    ]
]));

//URLs
$app->get("/", "\WebControler:cargarHome");
$app->get("/temas/{id}","\WebControler:temas");
 $app->get("/crear","\WebControler:crear");
 $app->get("/estadisticas","\WebControler:estadisticas");


$app->run();
?>
