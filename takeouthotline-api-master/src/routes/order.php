<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 19/03/2017
 * Time: 7:39 PM
 */
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use TakeOutHotline\Entities\Order;
use TakeOutHotline\Resources\OrderResouce;

$orderResource= new OrderResouce();

$settings = require BASE_DIR . '/../src/settings.php';

$app->options("/order/create", function(Request $request, Response $response, $args) use ($settings, $orderResource) {});

$app->post("/order/create", function(Request $request, Response $response, $args) use ($settings, $orderResource){
    $params = json_decode(file_get_contents('php://input'), true);
    if (!$params) {
        $params = $request->getParams();
    }

    $result = [];

    $last_id = $orderResource->createOrder($params);

    $result['success'] = true;
    $result['last_id'] = $last_id;

    echo json_encode($result);
});

$app->options("/order/history", function(Request $request, Response $response, $args) use ($settings, $orderResource) {});

$app->post("/order/history", function(Request $request, Response $response, $args) use ($settings, $orderResource){
    $params = json_decode(file_get_contents('php://input'), true);
    if (!$params) {
        $params = $request->getParams();
    }

    $history = $orderResource->getOrderHistory($params["customer_id"]);

    echo json_encode($history);

});