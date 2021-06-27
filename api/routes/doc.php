<?php

/**
 * @OA\Info(title="Wedding Planner API", version="0.1")
 * @OA\OpenApi(
 * @OA\Server(url="http://localhost/Projekat/api/", description="Development Environment")
 * )
 */

Flight::route('GET /swagger', function(){
  $openapi = \OpenApi\scan(dirname(__FILE__)."/../routes");
  header('Content-Type: application/json');
  echo $openapi->toJson();

});

 ?>
