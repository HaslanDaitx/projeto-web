<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gradient-to-r from-yellow-300 to-yellow-950 min-h-screen font-sans leading-normal tracking-normal">

    <nav
        class="bg-gradient-to-r from-slate-600 to-slate-950 p-4 text-white shadow-md flex justify-between items-center">
        <h1 class="text-2xl font-bold">Pokédex</h1>
        <a href="{{ url('pokemon/create') }}"
            class="bg-yellow-500 hover:bg-yellow-600 text-black py-2 px-4 rounded">Novo
            Pokémon</a>
    </nav>
    <div class="container mx-auto mt-8 p-4">
        @yield('content')
    </div>

</body>

</html>