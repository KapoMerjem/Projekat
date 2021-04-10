<?php

Flight::route('GET /bands', function(){
    Flight::json(  Flight::bandDao->get_by_id(0,10));
});

Flight::route('GET /bands/@id', function($id){
    Flight::json(Flight::bandDao->get_by_id($id));
});

Flight::route('POST /bands', function(){
    $request = Flight::request()->data->getData();
    Flight::json(Flight::bandDao->add($data));
});
Flight::route('PUT /bands/@id', function($id){
    $request = Flight::request();
    $data = $request->data->getData();
    Flight::bandDao->update($id, $data);
    $bands = Flight::bandDao->get_by_id($id);
    Flight::json($band);
});

?>
