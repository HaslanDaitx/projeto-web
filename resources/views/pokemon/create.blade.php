<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="tipo" placeholder="Tipo" required>
    <input type="number" name="ponto_de_poder" placeholder="Ponto de Poder" required>
    <button type="submit">Create Pokemon</button>
</form>