<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use illuminate\Support\Facade\Response;
use App\BsBbsTable;



class BsBbsController extends Controller
{
    /**
     * 記事に対応したコメントを返却する
     * 
     */
    public function getKijiList($article_num) : JsonResponse
    {
        # code...
        $list = BsBbsTable::where('kiji_num', $article_num)->orderBy('number')->get();

        return response()->json($list);
    }
}
