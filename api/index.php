<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__).'/../vendor/autoload.php';
require_once dirname(__FILE__).'/services/CityService.class.php';
require_once dirname(__FILE__).'/services/UserService.class.php';
require_once dirname(__FILE__).'/services/PhotographerService.class.php';



Flight::map('error', function(\Throwable  $ex){
  Flight::json(["message" => $ex->getMessage()], $ex->getCode() ? $ex->getCode() : 500);
});


Flight::map('query', function($name, $default_value=NULL){
 $request = Flight::request();
 $query_param = @$request->query->getData()[$name];
 $query_param = $query_param ? $query_param : $default_value;
 return $query_param;


});


Flight::route('GET /swagger', function(){

  $openapi = @\OpenApi\scan(dirname(__FILE__)."/routes");
  header('Content-Type: application/json');
  echo $openapi->toJson();

});
Flight::route('GET /', function(){
  Flight::redirect('/docs');
});


/*Register Business logic layer services*/
Flight::register('cityService', 'CityService');
Flight::register('userService', 'UserService');
Flight::register('photographerService', 'PhotographerService');



/*Include all routes*/
require_once dirname(__FILE__)."/routes/cities.php";
require_once dirname(__FILE__)."/routes/users.php";
require_once dirname(__FILE__)."/routes/photographers.php";


Flight::start();

?>
