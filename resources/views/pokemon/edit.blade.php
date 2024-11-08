<form action="{{ url(path: 'pokemon/' . $pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Nome" value="{{ $pokemon->nome }}" required>
    <input type="text" name="tipo" placeholder="Tipo" value="{{ $pokemon->tipo }}" required>
    <input type="number" name="ponto_de_poder" placeholder="Ponto de Poder" value="{{ $pokemon->ponto_de_poder }}"
        required>

    <button type="submit">Update Pokemon</button>
</form>