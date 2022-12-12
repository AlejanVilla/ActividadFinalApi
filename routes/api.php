<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Firebase\JWT\JWT;
use App\Models\User;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/** Rutas Categories */
Route:: get('categories', [CategoryController::class, 'index']);
Route:: post('categories', [CategoryController::class, 'store']);
Route:: get('categories/{category}', [CategoryController::class, 'show']);
Route:: put('categories/{category}', [CategoryController::class, 'update']);
Route:: delete('categories/{category}', [CategoryController::class, 'destroy']);

/** Rutas Posts */
Route:: get('posts', [PostController::class, 'index']);
Route:: post('posts', [PostController::class, 'store']);
Route:: get('posts/{post}', [PostController::class, 'show']);
Route:: put('posts/{post}', [PostController::class, 'update']);
Route:: delete('posts/{post}', [PostController::class, 'destroy']);

/** Rutas Users */
Route:: get('users', [UserController::class, 'index']);
Route:: post('users', [UserController::class, 'store']);
Route:: get('users/{user}', [UserController::class, 'show']);
Route:: put('users/{user}', [UserController::class, 'update']);
Route:: delete('users/{user}', [UserController::class, 'destroy']);

Route:: post('login/auth', [AuthController::class, 'authentication']);

/** Ruta token */

/*Route:: get('token', function(){
    
    $dataUsers = User::find(2)->toArray();
    $jwt = JWT::encode($dataUsers, env('JWT_SECRET'), 'HS256'); 

    return response()->json([
        'token' => $jwt,
        'msj' => "Logrado!!",
    ]);
});

Route::get('/categories', function (Request $request){
    
        $jwt = substr($request->header('Authorization', 'token <token>'), 6);
    
        try{
            JWT::decode($jwt,new Key(env('JWT_SECRET'), 'HS256'));
            return response()->json($dataUsers::all());
        } catch (\Throwable $e){
            return response()->json([
                'msj' => 'Token incorrecto'
            ])->setStatusCode(401);
        }
    
});*/