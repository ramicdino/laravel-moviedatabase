@extends('layouts.app')

@section('content')
    <div class="single-movie flex space-x-8 p-8 bg-gray-800">
        <img
            src="https://image.tmdb.org/t/p/w342/{{ $movie['poster_path'] }}"
            alt="{{ $movie['title'] }}"
            title="{{ $movie['title'] }}"
            class="hover:opacity-75 shadow transition"
        >
        <section class="movie-info flex flex-col justify-between w-full">
            <div class="movie-info__upper">
                <h1 class="text-5xl font-bold border-b pb-8 mb-8 border-gray-900">
                    {{ $movie['title'] }}
                </h1>
                <h3 class="text-2xl font-semibold tracking-wider">Overview</h3>
                <p class="font-extralight italic tracking-widest leading-7">
                    {{ $movie['overview'] }}
                </p>
            </div>
            <div class="movie-info__lower space-y-8">
                <div class="space-x-2">
                    <span>
                        Release date: <strong>{{ \Carbon\Carbon::parse($movie['release_date'])->format('d.m.Y') }}</strong>
                    </span>
                    <span>
                        Average vote: <strong>{{ $movie['vote_average'] }}</strong> <i class="lni lni-star-filled text-yellow-400"></i>
                    </span>
                    <span>
                        Vote count: <strong>{{ $movie['vote_count'] }}</strong>
                    </span>
                    <span>
                        Adult: <strong>{{ $movie['popularity'] ? 'No' : 'Yes' }}</strong>
                    </span>
                </div>

                <button disabled class="cursor-not-allowed bg-yellow-600 hover:bg-yellow-500 ease-in-out transition px-6 py-3 w-full rounded-full font-semibold uppercase tracking-widest">
                    <i class="lni lni-play"></i> Watch Trailer
                </button>
            </div>
        </section>
    </div>


    <div class="movie-actors mt-8">
        <h1 class="text-2xl text-yellow-600 uppercase font-semibold mb-8">
            <i class="lni lni-users"></i>
            Actors
        </h1>
        <div class="grid grid-cols-12 gap-8">
            @foreach($casts as $cast)
                @if($cast['profile_path'])
                    <img
                        src="https://image.tmdb.org/t/p/w185/{{ $cast['profile_path'] }}"
                        alt="{{ $cast['name'] }}"
                        title="{{ $cast['name'] }}"
                        class="border-gray-800 border hover:opacity-75 hover:border-yellow-600 hover:shadow transition"
                    >
                @endif
            @endforeach
        </div>
    </div>
@endsection
