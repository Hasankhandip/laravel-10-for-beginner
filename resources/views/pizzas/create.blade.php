<h1>Add New Pizza</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('pizzas.store') }}">
    @csrf
    <input name="name" placeholder="Pizza Name" value="{{ old('name') }}"><br>
    <input name="price" placeholder="Price" value="{{ old('price') }}"><br>
    <textarea name="description" placeholder="Description">{{ old('description') }}</textarea><br>
    <button type="submit">Create</button>
</form>
