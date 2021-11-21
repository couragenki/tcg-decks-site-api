<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/article/{post_id}', [App\Http\Controllers\BsBbsController::class, 'getPosts']);

Route::post('/article/{post_id}', 'BsBbsController@addPost');

/*
Route::post('/article/{kiji_num}', function(Request $request){
    
    $author = $request->input('author');
    $comment = $request->input('comment');

    $array = array(
        'id' => '99',
        'post_id' => '1',
        'create_time' => '2021-10-09 10:01:00',
        'comment_id' => '20',
        'update_time' => '2021-10-09 10:01:00',
        'author' => $author,
        'comment' => $comment
    );

    $array2 = array(
        'id' => '99',
        'kiji_num' => '1',
        'create_time' => '2021-10-09 10:01:00',
        'number' => '20',
        'update_time' => '2021-10-09 10:01:00',
        'author' => $author,
        'comment' => $comment
    );

    $array3 = array($array, $array2);
    return json_encode($array3);
});
*/
