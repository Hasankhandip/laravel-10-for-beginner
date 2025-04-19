<h1>All Pizzas</h1>
<a href="{{ route('pizzas.create') }}">+ Add Pizza</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
    @foreach($pizzas as $pizza)
        <li>
            {{ $pizza->name }} - ${{ $pizza->price }}
            <a href="{{ route('pizzas.show', $pizza->id) }}">View</a> |
            <a href="{{ route('pizzas.edit', $pizza->id) }}">Edit</a>
            <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
