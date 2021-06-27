<?php

Flight::route('GET /photographers', function(){
    $id_city = Flight::query('id_city');
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);
    $search = Flight::query('search');

    Flight::json(Flight::photographerService()->get_photographers($id_city, $offset, $limit, $search));
});

Flight::route('POST /photographers', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::photographerService()->add($data));
});

?>
