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

Route::get('/article/{kiji_num}', [App\Http\Controllers\BsBbsController::class, 'getKijiList']);

Route::get('/tier', function() {
    $deck1 = array(
        'deckId'=> 1, 
        'deckName'=> '機竜',
        'deckScore'=> 9.5
    );
    $deck2 = array(
        'deckId'=> 2, 
        'deckName'=> '妖怪魔影',
        'deckScore'=> 9
    );
    $deck3 = array(
        'deckId'=> 3, 
        'deckName'=> 'WBS',
        'deckScore'=> 9
    );

    return json_encode(array($deck1, $deck2, $deck3), JSON_UNESCAPED_UNICODE);
});
