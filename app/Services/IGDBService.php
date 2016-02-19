<?php namespace GameKeyEngine\Services;

use App;

class IGDBService {

	private $endpoint = '';
	private $key = '';

	public function __construct(){
		$this->key = env('IGDB_KEY');
		$this->endpoint = env('IGDB_endpoint');
	}

    public function getToken(){
    	return $this->key;
    }

	/*
	 * Get all games
	 */
    public function getGames($amount, $index){
    }

	/*
	 * Get game details
	 */
    public function getGameMeta($gameId){

    }

    /*
     * Search games
     */
	public function searchGames($query, $platforms, $filters){
	}


}

?>