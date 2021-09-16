<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beer;
use App\Coaster;

use App\Tag;
use Illuminate\Support\Facades\DB;


class apiController extends Controller
{
  public function show()
  {
    return Beer::all();
  }

  public function index($id)
  {

    $id = intval($id);
    return Beer::find($id);
  }

  public function coaster($id)
  {

    $id = intval($id);
    return Coaster::find($id);
  }

  public function tag($id){
    $id = Beer::getBeerId($id);
    $id = intval($id);
    //DB::table('beers')->where('id', '=', $id)->increment('count');
    return Beer::find($id);

  }
}
