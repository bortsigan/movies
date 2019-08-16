<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\MovieService;

class MovieController extends Controller
{

	protected $movieService;

	public function __construct(MovieService $movieService)
    {
    	$this->movieService = $movieService;
    }

    public function index() 
    {
    	$movies = $this->movieService->getAllMovies();

    	return view('movie.index', compact('movies'));
    }

    public function detail($id) {
    	$details = $this->movieService->getMovieDetail($id);
    	return view('movie.detail', compact('details'));
    }
}
