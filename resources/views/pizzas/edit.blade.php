<h1>Edit Pizza</h1>

<form method="POST" action="{{ route('pizzas.update', $pizza->id) }}">
    @csrf
    @method('PUT')

    <input name="name" value="{{ $pizza->name }}"><br>
    <input name="price" value="{{ $pizza->price }}"><br>
    <textarea name="description">{{ $pizza->description }}</textarea><br>

    <button type="submit">Update</button>
</form>
