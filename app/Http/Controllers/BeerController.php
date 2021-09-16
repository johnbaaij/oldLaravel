<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coaster;
use App\Beer;
use Illuminate\Support\Facades\DB;




class BeerController extends Controller{

  public function updateState($id, $state)
  {
    switch ($state) {
          case "vol":
              //$full = "#636b6f";
              Coaster::setState("#636b6f");
              break;
          case "leeg":
              //$full = "red";
              Coaster::setState("red");
              break;
          default:
            break;
  }
}

  public function updateCount($id,$tag_id){
    $id = Beer::getBeerId($tag_id);
    $id = intval($id);
    DB::table('beers')->where('id', '=', $id)->increment('count');
  }
}
