@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-4">Adicionar Novo Pokémon</h2>
    <form action="{{ url('pokemon') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="nome" class="block text-sm font-medium">Insira o Nome</label>
            <input type="text" name="nome" class="w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label for="tipo" class="block text-sm font-medium">Tipo</label>
            <input type="text" name="tipo" class="w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label for="ponto_de_poder" class="block text-sm font-medium">Ponto de Poder</label>
            <input type="number" name="ponto_de_poder" class="w-full border border-gray-300 rounded p-2" required>
        </div>
        <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black py-2 px-4 rounded">Adicionar
            Pokémon</button>
    </form>
</div>
@endsection