@extends('layouts.app')

@section('content')
    <div class="now-playing-movies mb-8 p-8 bg-gray-800 hover:shadow-lg">
        <h1 class="text-2xl text-indigo-600 uppercase font-semibold mb-8">
            <i class="lni lni-play"></i>
            What is now playing?
        </h1>

        <div class="grid grid-cols-5 gap-8">
            @foreach($nowPlayingMovies as $movie)
                @if($loop->iteration <= 5)
                    <div class=" text-center">
                        <a href="{{ route('show', ['movie_id' => $movie['id']]) }}">
                            <img
                                src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                                alt="{{ $movie['title'] }}"
                                title="{{ $movie['title'] }}"
                                class="border-indigo-600 border-2 hover:border-gray-700 hover:opacity-50 transition ease-in-out"
                            >
                        </a>
                        <a
                            href="{{ route('show', ['movie_id' => $movie['id']]) }}"
                            class="font-semibold text-xl text-gray-300"
                        >
                            {{ $movie['title'] }}
                        </a>
                        <div class="movie-info flex items-center justify-center uppercase text-sm text-gray-600 space-x-2.5">
                            <span>
                                <i class="lni lni-timer"></i>
                                <strong class="text-gray-600">
                                    {{ \Carbon\Carbon::parse($movie['release_date'])->format('d.m.Y') }}
                                </strong>
                            </span>
                            <span>
                                <i class="lni text-yellow-300 lni-star-filled"></i>
                                <strong class="text-gray-600">
                                    {{ $movie['vote_average'] }}
                                </strong>
                            </span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="popular-movies">
        <h1 class="text-2xl text-yellow-600 uppercase font-semibold mb-8">
            <i class="lni lni-star"></i>
            Popular Movies
        </h1>

        <div class="grid grid-cols-10 gap-4">
            @foreach($popularMovies as $movie)
                <div class="text-center">
                    <a href="{{ route('show', ['movie_id' => $movie['id']]) }}">
                        <img
                            src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                            alt="{{ $movie['title'] }}"
                            title="{{ $movie['title'] }}"
                            class="border-yellow-600 border-2 hover:border-gray-800 hover:opacity-50 transition ease-in-out"
                        >
                    </a>
                    <a
                        href="{{ route('show', ['movie_id' => $movie['id']]) }}"
                        class="font-semibold text-gray-300 text-sm"
                    >
                        {{ \Illuminate\Support\Str::limit($movie['title'], 14) }}
                    </a>
                    <div class="movie-info flex items-center justify-center uppercase text-sm text-gray-600 space-x-2.5">
                        <span>
                            <i class="lni text-yellow-300 lni-star-filled"></i>
                                <strong class="text-gray-300">
                                    {{ $movie['vote_average'] }}
                                </strong>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="top-rated-movies">
        <h1 class="text-2xl text-red-600 uppercase font-semibold my-8">
            <i class="lni lni-thumbs-up"></i>
            Top Rated Movies
        </h1>

        <div class="grid grid-cols-10 gap-4">
            @foreach($topRatedMovies as $movie)
                <div class="text-center">
                    <a href="{{ route('show', ['movie_id' => $movie['id']]) }}">
                        <img
                            src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}"
                            alt="{{ $movie['title'] }}"
                            title="{{ $movie['title'] }}"
                            class="border-red-600 border-2 hover:border-gray-800 hover:opacity-50 transition ease-in-out"
                        >
                    </a>
                    <a
                        href="{{ route('show', ['movie_id' => $movie['id']]) }}"
                        class="font-semibold text-gray-300 text-sm"
                    >
                        {{ \Illuminate\Support\Str::limit($movie['title'], 14) }}
                    </a>
                    <div class="movie-info flex items-center justify-center uppercase text-sm text-gray-600 space-x-2.5">
                        <span>
                            <i class="lni text-yellow-300 lni-star-filled"></i>
                                <strong class="text-gray-300">
                                    {{ $movie['vote_average'] }}
                                </strong>
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
