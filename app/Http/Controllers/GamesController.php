<?php

namespace GameKeyEngine\Http\Controllers;

use Illuminate\Http\Request;

use GameKeyEngine\Http\Requests;
use GameKeyEngine\Http\Controllers\Controller;
use GameKeyEngine\Games;
use DBorsatto\GiantBomb;
use GameKeyEngine\IGDBService;

class GamesController extends Controller
{
    //
    
    public function index(){

		$IGDB = new IGDBService;


//		$curl = curl_init("https://www.igdb.com/api/v1/games");
//		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json','Authorization: Token token="K4AuVBIdV7z-DaZ404QqWkl1Eul-UazmfWKtWrSPfsU"'));
//		curl_exec ($curl);
//		$response = curl_getinfo( $curl );
//		echo $response;



//
//        $games = Games::orderBy('created_at', 'asc')->get();
//
//        print_r($games);
//        echo "<hr/>";
//
//        $apiKey = 'c8812bf7df146ee3e99e58985560da1ee000aeaa';
//
//        $config = new GiantBomb\Config($apiKey);
//        $client = new GiantBomb\Client($config);
//
//        $games = $client->getRepository('Game')->query()
//            ->addFilterBy('name', 'Uncharted')
//            ->sortBy('original_release_date', 'asc')
//            ->setFieldList(array('id', 'name', 'deck'))
//            ->setParameter('limit', 100)
//            ->setParameter('offset', 0)
//            ->find();
//        echo count($games)." Game objects loaded\n";
//
//        //print_r($games);
//
//        foreach ($games as $game) {
//
//            echo $game->name;
//
//            //Check if we have this game allready
//            $newGame = Games::find($game->id);
//            if ($newGame == null) {
//                $newGame = new Games;
//                $newGame->id = $game->id;
//                $newGame->title = $game->name;
//                $newGame->save();
//            }
//        }
        
        
    }
}



