<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<h1> Parallax Crud Application </h>

<h2>Products</h2>
<div class="container">
<table class="table table-dark table-striped-columns">
 <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
    </tr>
 </thead>
 <tbody>
 @foreach($products as $product)
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td>{{$product->price}}</td>
<td>{{$product->category->name}}</td>
@endforeach
 </tbody>
</table>
</div>