<?php

Flight::route('GET /cities', function(){
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 10);
    $search = Flight::query('search');
    $order = Flight::query('order', "-id");


    Flight::json(Flight::cityService()->get_cities($search, $offset, $limit));
});

Flight::route('GET /cities/@id', function($id){
    Flight::json(Flight::cityService()->get_by_id($id));
});

Flight::route('POST /cities', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cityService()->add($data));
});

Flight::route('PUT /cities@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cityService()->update($id, $data));
});

?>
