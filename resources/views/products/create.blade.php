<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
@include('layouts.header')
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
<table>
  <tr>
    <th>Name</th>
    <th>Contact</th>
    <th>Country</th>
    <th>Actions</th>
  </tr>
  @foreach ($products1 as $product)
  <tr>
    <td>{{ $product->name }}</td>
    <td>{{ $product->description }}</td>
    <td>{{ $product->price }}</td>
    <td>
        <form action="/delete/{{ $product->id }}" method="POST">    @csrf  @method('DELETE')<button class="btn btn-warning">Delete</button></form>
      
        <form action="/edit/{{ $product->id }}" method="GET">
        <button class="btn btn-primary">Edit</button>
        </form>
      
    </td>
  </tr>
  @endforeach
</table>


<form action="/update/{{ $productone->id }}" method="POST" class="form">
    <legend>form create</legend>
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required value="{{ $productone->name }}">
    </div>
    <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" class="form-control" id="description" name="description" required value="{{ $productone->description }}">
    </div>
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="price" name="price" required value="{{ $productone->price }}">
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>





