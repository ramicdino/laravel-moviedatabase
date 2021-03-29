<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index() {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        $topRatedMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/top_rated')
            ->json()['results'];

        return view('index', [
            'popularMovies' => $popularMovies,
            'nowPlayingMovies' => $nowPlayingMovies,
            'topRatedMovies' => $topRatedMovies,
        ]);
    }

    public function show($movie_id) {
        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$movie_id)
            ->json();

        $casts = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$movie_id.'/credits')
            ->json()['cast'];


        return view('show', [
            'movie' => $movie,
            'casts' => $casts,
        ]);
    }
}
