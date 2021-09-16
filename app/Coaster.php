<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coaster extends Model
{
    public static function setState($full){
      DB::table('coasters')
            ->where('id', 1)
            ->update(['full' => $full]);
    }
}
