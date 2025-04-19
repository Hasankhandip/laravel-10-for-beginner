<h1>All Vats</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Name</th>
        <th scope="col">Topping</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($vats as $vat )
        <tr>
            <th scope="row">{{$vat->id}}</th>
            <td>{{$vat->name}}</td>
            <td>{{$vat->topping}}</td>
            <td>${{ $vat->price }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>