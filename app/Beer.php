<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Beer extends Model
{
    //

    public static function getBeerId($tagId){
      $beerId = DB::table('tags')->where('id', $tagId)->value('beer_id');
      return $beerId;
    }


    public static function getParsedData($beerId){

      $data = DB::select('select minWeight, maxWeight, red, green, blue from beers where id = ?', [$beerId]);
      return $data;
    }

    public static function getAllData($beerId){

      $data = DB::select('select * from beers where id = ?', [$beerId]);
      return $data;
    }
}
