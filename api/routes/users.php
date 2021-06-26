<?php

Flight::route('POST /users/register', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::userService()->add($data));
});

Flight::route('POST /users/confirm/@token', function($token){
    Flight::userService()->confirm($token);
    Flight::json(["message" => "Activated!"]);
});

?>
