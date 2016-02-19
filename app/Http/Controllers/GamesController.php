<?php

namespace GameKeyEngine\Http\Controllers;

use Illuminate\Http\Request;

use GameKeyEngine\Http\Requests;
use GameKeyEngine\Http\Controllers\Controller;
use GameKeyEngine\Games;
use DBorsatto\GiantBomb;
use GameKeyEngine\Services\IGDBService;

class GamesController extends Controller
{

    public function index(){

		$IGDB = new IGDBService;

		$IGDB->getToken();

		return view('games');


    }
}



