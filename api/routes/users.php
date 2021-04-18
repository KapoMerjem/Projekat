<?php

Flight::route('POST /users/register', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::bandService()->add($data));
});

?>
