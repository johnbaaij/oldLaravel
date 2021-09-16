<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $beers = DB::table('beers')->select('name', 'count')->where('count', '!=', 0)->get();
		$newbeer = DB::table('coasters')->select('full')->get();
      return view('home', ['beers' => $beers], ['newbeer' => $newbeer]);
    }

	public function add()
    {
	    $beers = DB::table('beers')->select('name', 'id')->get();
		$newbeer = DB::table('coasters')->select('full')->get();
      return view('add', ['beers' => $beers], ['newbeer' => $newbeer]);
    }
	public function addid()
    {
	    $beers = DB::table('beers')->select('name', 'id')->get();
		$newbeer = DB::table('coasters')->select('full')->get();
      return view('addid', ['beers' => $beers], ['newbeer' => $newbeer]);
    }

    public function voegToe()
    {
	$naam = Input::get('name');
	$minGewicht = Input::get('minWeight');
	$maxGewicht = Input::get('maxWeight');
	$kleur = Input::get('color');
	list($r, $g, $b) = sscanf($kleur, "#%02x%02x%02x");
	$aantal = 0;


	DB::table('beers')->insert(
	array('name' => $naam, 'minWeight' => $minGewicht, 'maxWeight' => $maxGewicht, 'red' => $r, 'green' => $g, 'blue' => $b, 'count' => $aantal));
    }

    public function voegIdToe()
    {
	$id = Input::get('id');
	$beerid = Input::get('beerid');

	DB::table('tags')->insert(
	array('beer_id' => $beerid,'id' => $id));

    }
    public static function receipt(){
      DB::table('beers')
            ->update(['count' => 0]);



    }

}
