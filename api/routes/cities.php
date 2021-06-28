<?php

/* Swagger documentation */
/**
 * @OA\Info(title="Wedding Planner API", version="0.1")
 * @OA\OpenApi(
 *    @OA\Server(url="http://localhost/Projekat/api/", description="Development Environment")
* )
 */

/**
 * @OA\Get(path="/cities",
 *     @OA\Response(response="200", description="List cities from database")
 * )
 */

Flight::route('GET /cities', function(){
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 10);
    $search = Flight::query('search');
    $order = Flight::query('order', "-id");


    Flight::json(Flight::cityService()->get_cities($search, $offset, $limit));
});

/**
 * @OA\Get(path="/cities/{id}",
*       @OA\Parameter(@OA\Schema(type="integer"),in="path", allowReserved=true, name="id", example=1),
 *      @OA\Response(response="200", description="List cities from database"),
 * )
 */

Flight::route('GET /cities/@id', function($id){
    Flight::json(Flight::cityService()->get_by_id($id));
});

/**
 * @OA\Post(path="/cities",
 *      @OA\Response(response="200", description="Add city"),
 * )
 */

Flight::route('POST /cities', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cityService()->add($data));
});

/**
 * @OA\Put(path="/cities/{id}",
 *       @OA\Parameter(@OA\Schema(type="integer"),in="path", allowReserved=true, name="id", example=1),
 *      @OA\Response(response="200", description="Update cities based on id"),
 * )
 */

Flight::route('PUT /cities@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cityService()->update($id, $data));
});

?>
