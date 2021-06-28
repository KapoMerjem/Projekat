<?php

/* Swagger documentation */
/**
 * @OA\Info(title="Wedding Planner API", version="0.1")
 * @OA\OpenApi(
 *    @OA\Server(url="http://localhost/Projekat/api/", description="Development Environment")
* )
 */

/**
 * @OA\Get(path="/cities", tags={"cities"},
 *     @OA\Parameter(type="integer",in="query", name="offset", default=0, description="Offset for pagination"),
 *     @OA\Parameter(type="integer",in="query", name="limit", default=25, description="Limit for pagination"),
 *     @OA\Parameter(type="integer",in="query", name="search", description="Search string for cities. Case insensitive search."),
 *     @OA\Parameter(type="integer",in="query", name="order", default="-id", description="Sorting for return elements. -column_name ascending order by column_name or +column_name descending order by column_name"),
 *     @OA\Response(response="200", description="List cities from database")

 * )
 */

Flight::route('GET /cities', function(){
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);
    $search = Flight::query('search');
    $order = Flight::query('order', "-id");


    Flight::json(Flight::cityService()->get_cities($search, $offset, $limit));
});

/**
 * @OA\Get(path="/cities/{id}", tags={"cities"},
*       @OA\Parameter(@OA\Schema(type="integer"),in="path", name="id", default=1, description="id of city"),
 *      @OA\Response(response="200", description="Fetch individual city"),
 * )
 */

Flight::route('GET /cities/@id', function($id){
    Flight::json(Flight::cityService()->get_by_id($id));
});

/**
 * @OA\Post(path="/cities", tags){"cities"},
 *@OA\RequestBody(
 *    description="Basic city info",
 *    required=true,
 *      @OA\MedidaType(
 *          mediaType="application/json",
 *          @OA\Property(property="name", required="true", type="string", example="My test city", description="Name of rhe city"),
 *          @OA\Property(property="postal_co", type="string", example="71 000", description="Postal number")
 *            )
 *         )
 *      ),
 *      @OA\Response(response="200", description="Ciity that has been added into database with id assigned.")
 * )
 */

Flight::route('POST /cities', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cityService()->add($data));
});

/**
 * @OA\Put(path="/cities/{id}", tags){"city"},
 *    @OA\Parameter(@OA\Schema(type="integer"),in="path", name="id", default=1),
*     @OA\RequestBody(
*       description="Basic city info that is going to be updated",
*       required=true,
*          @OA\MedidaType(
*              mediaType="application/json",
*          @OA\Property(property="name", required="true", type="string", example="My test city", description="Name of rhe city"),
*          @OA\Property(property="postal_co", type="string", example="71 000", description="Postal number")
*            )
*         )
*      ),
 *      @OA\Response(response="200", description="Update cities based on id"),
 * )
 */

Flight::route('PUT /cities@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::cityService()->update($id, $data));
});

?>
