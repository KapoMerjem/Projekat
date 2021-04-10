<?php

Flight::route('GET /bands', function(){
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 10);
    $search = Flight::query('search');

    Flight::json(Flight::bandService()->get_bands($search, $offset, $limit));
});

Flight::route('GET /bands/@id', function($id){
    Flight::json(Flight::bandService()->get_by_id($id));
});

Flight::route('POST /bands', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::bandService()->add($data));
});
Flight::route('PUT /bands/@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::bandService()->update($id, $data));
});

?>
