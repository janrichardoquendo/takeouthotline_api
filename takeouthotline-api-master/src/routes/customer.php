<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 28/02/2017
 * Time: 3:20 PM
 */
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use TakeOutHotline\Resources\CustomerResource;

$settings = require BASE_DIR . '/../src/settings.php';

$customerResource = new CustomerResource();

$app->options("/customer/getcustomer", function(Request $request, Response $response, $args) use ($settings) {});

$app->get("/customer/getcustomer", function(Request $request, Response $response, $args) use ($settings){

    $result = new CustomerResource();

    echo json_encode(array("success"=>true, "msg" => "Success getting customer data", "data" => $result->getCustomer(2)));
});


$app->options("/customer/getcustomerall", function(Request $request, Response $response, $args) use ($settings) {});

$app->get("/customer/getcustomerall", function(Request $request, Response $response, $args) use ($settings){

    $result = new CustomerResource();

    echo json_encode(array("success"=>true, "msg" => "Success getting customer data", "data" => $result->getCustomerAll()));
});

//customer registration

$app->options("/customer/create", function(Request $request, Response $response, $args) use ($settings) {});

$app->post("/customer/create", function(Request $request, Response $response, $args) use ($settings ,$customerResource){

    $params = json_decode(file_get_contents('php://input'), true);
    if (!$params) {
        $params = $request->getParams();
    }

    $result = [];

    $customer = $customerResource->createCustomer($params);

    if(isset($customer["error"]) && $customer["error"] == 1){
        $result['success'] = false;
        $result['customer'] = $customer;
    } else {
        $result['success'] = true;
        $result['customer'] = $customer;
    }

    echo json_encode($result);

});


$app->options("/customer/login", function(Request $request, Response $response, $args) use ($settings) {});

$app->post("/customer/login", function(Request $request, Response $response, $args) use ($settings ,$customerResource){

    $params = json_decode(file_get_contents('php://input'), true);
    if (!$params) {
        $params = $request->getParams();
    }

    $result = [];

    $customer = $customerResource->getCustomerByLogin($params);

    $result['result'] = $customer;


    echo json_encode($result);

});

$app->options("/customer/profile", function(Request $request, Response $response, $args) use ($settings, $customerResource) {});

$app->post("/customer/profile", function(Request $request, Response $response, $args) use ($settings, $customerResource){
    $params = json_decode(file_get_contents('php://input'), true);
    if (!$params) {
        $params = $request->getParams();
    }

    $profile = $customerResource->getCustomerProfile($params["customer_id"]);

    echo json_encode($profile);

});

$app->options("/customer/profile-update", function(Request $request, Response $response, $args) use ($settings, $customerResource) {});

$app->post("/customer/profile-update", function(Request $request, Response $response, $args) use ($settings, $customerResource){
    $params = json_decode(file_get_contents('php://input'), true);
    if (!$params) {
        $params = $request->getParams();
    }
    $profileUpdate = $customerResource->updateCustomerProfile($params);
    echo json_encode($profileUpdate);
});