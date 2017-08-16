<?php
use Dingo\Api\Routing\Router as ApiRouter;

$router->version('v1', ['namespace' => 'V1', 'middleware' => ['api.auth']], function (ApiRouter $router) {

});
