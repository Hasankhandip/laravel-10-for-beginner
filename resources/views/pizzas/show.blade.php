<h1>{{ $pizza->name }}</h1>
<p>Price: ${{ $pizza->price }}</p>
<p>{{ $pizza->description }}</p>

<a href="{{ route('pizzas.edit', $pizza->id) }}">Edit</a>
<a href="{{ route('pizzas.index') }}">Back</a>