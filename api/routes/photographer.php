<?php

Flight::route('POST /photographers', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::photographerService()->add($data));
});

?>
