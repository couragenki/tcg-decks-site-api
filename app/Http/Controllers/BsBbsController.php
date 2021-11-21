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
    public function getPosts($post_id) : JsonResponse
    {
        # code...
        $list = BsBbsTable::where('post_id', $post_id)->orderBy('comment_id', 'desc')->get();

        return response()->json($list);
    }

    /**
     * 記事の登録
     */
    public function addPost(Request $request, $post_id) 
    {
        $max_record = BsBbsTable::where('post_id', $post_id)->orderBy('comment_id', 'desc')->first();

        $bbs = new BsBbsTable;

        $bbs->post_id = $post_id;
        $bbs->comment_id = $max_record->comment_id + 1;
        $bbs->author = $request->input('author');
        $bbs->comment = $request->input('comment');
        $bbs->create_time = now();
        $bbs->update_time = now();
        $bbs->save();
        
        return $this->getPosts($post_id);
    }
}
