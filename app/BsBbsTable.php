<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * bs_bbs_table のModelクラス
 * 
 * bs_bbs_table にデータアクセスする際に使用する
 * 
 */
class BsBbsTable extends Model
{
    // 対象テーブル名
    public $table = 'bs_bbs_table';

    // create_at, update_at を無効
    public $timestamps = false;
}
