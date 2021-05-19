<?php

namespace App\Models;

class Addmovie
{
	protected $movie_name;
    protected $movie_rating;
    protected $rating_list=[];
    protected $movie_List=[];
	public function setMovieName($movie_name)
	{
		$this->movie_name = $movie_name;
	}
	public function getMovieName() {
			return $this->movie_name;
	}
	public function setRating($movie_rating)
	{
		$this->movie_rating = $movie_rating;

	}
	public function getRating() {
			return $this->movie_rating;
	}
	public function setMovieList($movie_List)
	{
		$this->movie_List = $movie_List;
	}
	public function setRating_list($rating_list)
	{
		$this->rating_list = $rating_list;
	}
	public function movie_already_added($movie_name){
        	
            if(array_search($movie_name,$this->movie_List) > -1){
                return true;
            }
            else{
                return false;
            }
        }
    public function movie_add($movie_name,$movie_rating){
    		$this->$movie_rating=$movie_rating;
    		$this->$movie_name=$movie_name;
        	
            if($this->$movie_rating === $this->getRating() && $this->$movie_name === $this->getMovieName()){
                return true;
            }
            else{
                return false;
            }
        }
    public function AllMovies($movie_List){ 

    		if($movie_List){
    			return $this->movie_List;
    		}
    		else{
    			return false;
    		}
    }
    public function SortMovieByName($movie_List)
    {
    	if($movie_List)
    	{
    		sort($movie_List);
    		return $this->movie_List;
    	}
    	else
    	{
    		return false;
    	}
    }
    
}