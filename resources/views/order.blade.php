<!-- resources/views/order.blade.php -->

<form method="POST" action="/order">
    @csrf
    <input type="text" name="name" placeholder="Your Name">
    <input type="number" name="quantity" placeholder="How many donuts?">
    <select name="flavor">
        <option value="chocolate">Chocolate</option>
        <option value="vanilla">Vanilla</option>
        <option value="strawberry">Strawberry</option>
    </select>
    <button type="submit">Place Order</button>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</form>
