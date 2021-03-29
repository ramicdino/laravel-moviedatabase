<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <title>Movie Database</title>
</head>
<body class="bg-gray-900 text-white font-sans">
<nav class="border-b border-gray-800 mb-8">
    <div class="container mx-auto flex items-center justify-between py-6">
        <div>
            <a href="{{ route('index') }}" class="font-bold text-xl">
                Movie Database
            </a>
            <a href="#" class="cursor-not-allowed ml-16 hover:text-gray-300">
                Movies
            </a>
        </div>

        <div>
            <input
                type="search"
                class="cursor-not-allowed w-64 rounded-full text-sm px-4 py-1 text-gray-300 bg-gray-800 focus:outline-none focus:shadow-outline"
                placeholder="Search.."
                disabled
            >
        </div>
    </div>
</nav>
<div class="container mx-auto pb-8">
    @yield('content')
</div>
</body>
</html>
