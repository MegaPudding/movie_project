<?php

class AddMovieTest extends \PHPUnit\Framework\TestCase
{

	protected $movie;

	public function testMovieIsAlreadyAddedOrNot()
	{
		$AddMovie = new \App\Models\Addmovie;
		$movie_List=['Hot Fuzz','The Trueman Show','Her'];
		$AddMovie->setMovieList($movie_List);
		$movie_name= 'Her';
		$this->assertEquals($AddMovie->movie_already_added($movie_name), true);

	}
	public function testMovieAdd()
	{
		$AddMovie = new \App\Models\Addmovie;
		$movie_rating='8';
		$movie_name= 'Her';
		$AddMovie->setRating('8');
		$AddMovie->setMovieName('Her');
		$this->assertEquals($AddMovie->movie_add($movie_name,$movie_rating), true);

	}
	public function testGetAllMovies()
	{
		$addmovie = new \App\Models\Addmovie;
		$movie_List=['Hot Fuzz','The Trueman Show','Her'];
		$addmovie->setMovieList($movie_List);
		$this->assertEquals($addmovie->AllMovies($movie_List), $movie_List);

	}
	public function testSortingByName()
	{
		$addmovie = new \App\Models\Addmovie;
		$movie_List=['Fantastic Mr.Fox','Arrival','Hot Fuzz'];
		$addmovie->setMovieList($movie_List);
		$this->assertEquals($addmovie->SortMovieByName($movie_List),($movie_List));

	}
}