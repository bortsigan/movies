<?php

namespace App\Services;

use App\Models\Movie;

class MovieService
{
	protected $movie;

	public function __construct(Movie $movie)
	{
		$this->movie = $movie;
	}

	public function getAllMovies() 
	{
		return $this->movie->paginate(10);
	}

	public function getMovieDetail($id) {
		$infos = [];
		$movie = $this->movie->find($id);

		$movie->load([
			'casts',
			'directions',
			'genres',
			'ratings'
		]);
		$actors = $movie->casts->load('actors')->first()->toArray();
		$reviewer = $movie->ratings->load('reviewer')->first()->toArray();
		$director = $movie->directions->load('director')->first()->toArray();	
		$genre = $movie->genres->load('genre')->first()->toArray();

		$infos = [
			'movie_title'			=> $movie->mov_title,
			'movie_year'			=> $movie->mov_year,
			'movie_time'			=> $movie->mov_time,
			'movie_director'		=> $director['director']['dir_fname'] . " " . $director['director']['dir_lname'],
			'movie_starring'		=> $actors['actors']['act_fname'] . " " . $actors['actors']['act_lname'],
			'movie_starring_role'	=> $actors['role'],
			'movie_genre'			=> $genre['genre']['gen_title'],
			'movie_rating'			=> $reviewer['reviewer']['rev_name'],
			'movie_stars'			=> $reviewer['rev_stars']
		];
		return $infos;
	}
}