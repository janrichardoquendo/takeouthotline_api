<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 08/03/2017
 * Time: 6:29 PM
 */
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use TakeOutHotline\Resources\ClientResource as ClientResource;

$settings = require BASE_DIR . '/../src/settings.php';

$app->options("/client/getclient", function(Request $request, Response $response, $args) use ($settings) {});

$app->post("/client/getclient", function(Request $request, Response $response, $args) use ($settings){

    $params = $request->getParams();

    $clientResource = new ClientResource();
    $result = $clientResource->getClient($params["postcode"]);
    echo json_encode(array("success"=>true, "msg" => "Success getting client data", "data" => $result));
});