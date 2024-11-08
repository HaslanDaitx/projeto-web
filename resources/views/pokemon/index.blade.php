@foreach($pokemon as $bolsomostro)
<div>
    <h3>{{ $bolsomostro->nome }}</h3>
    <h3>{{ $bolsomostro->tipo }}</h3>
    <h3>{{ $bolsomostro->ponto_de_poder }}</h3>
    <a href="{{ url('pokemon/'.$bolsomostro->id.'/edit') }}">Edit</a>
    <form action="{{ url('pokemon/'.$bolsomostro->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach