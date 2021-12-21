<?php

/**
 * @OA\Post(path="/users/register", tags={"users"},
 *@OA\RequestBody(
 *    description="Basic user info",
 *    required=true,
 *      @OA\MedidaType(
 *          mediaType="application/json",
 *          @OA\Property(property="city", required="true", type="string", example="My test city", description="Name of rhe city"),
 *          @OA\Property(property="name", type="string", example="First Name", description="Name of the user")
 *          @OA\Property(property="surname", required="true", type="Last Name", example="My test city", description="Surname of the user"),
*           @OA\Property(property="email", required="true", type="meejakapo@gmail.com", example="My test city", description="Email of the user"),
*          @OA\Property(property="password", required="true", type="string", example="My test city", description="Password"),
*   )
 *         )
 *      ),
 *      @OA\Response(response="200", description="Message that user has been created.")
 * )
 */

Flight::route('POST /users/register', function(){
    $data = Flight::request()->data->getData();
    Flight::userService()->register($data);
});

Flight::route('POST /users/confirm/@token', function($token){
    Flight::userService()->confirm($token);
    Flight::json(["message" => "Activated!"]);
});

/**
 * @OA\Post(path="/users/login", tags={"users"},
 *@OA\RequestBody(
 *    description="Basic user info",
 *    required=true,
 *      @OA\MedidaType(
 *          mediaType="application/json",
*           @OA\Property(property="email", required="true", type="meejakapo@gmail.com", example="My test city", description="Email of the user"),
*          @OA\Property(property="password", required="true", type="string", example="My test city", description="Password"),
*   )
 *         )
 *      ),
 *      @OA\Response(response="200", description="Message that user has been created.")
 * )
 */

Flight::route('POST /users/login', function(){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::userService()->login($data));
});

/**
 * @OA\Post(path="/users/login", tags={"users"},
 *@OA\RequestBody(
 *    description="Send recovery URL",
 *    required=true,
 *      @OA\MedidaType(
 *          mediaType="application/json",
*           @OA\Property(property="email", required="true", type="meejakapo@gmail.com", example="My test city", description="Email of the user"),
*          @OA\Property(property="password", required="true", type="string", example="My test city", description="Password"),
*   )
 *         )
 *      ),
 *      @OA\Response(response="200", description="Message that user has been created.")
 * )
 */

Flight::route('POST /users/forgot', function(){
    $data = Flight::request()->data->getData();
    Flight::userService()->login($data);
});
?>
