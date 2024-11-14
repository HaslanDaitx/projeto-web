<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-blue-400 to-yellow-800 min-h-screen font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white shadow-md flex justify-between items-center">
        <h1 class="text-2xl font-bold">Pokédex</h1>
        <a href="{{ url('pokemon/create') }}"
            class="bg-yellow-500 hover:bg-yellow-600 text-black py-2 px-4 rounded">Novo
            Pokémon</a>
    </nav>

    <!-- Content -->
    <div class="container mx-auto mt-8 p-4">
        @yield('content')
    </div>

</body>

</html>