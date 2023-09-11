<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<h1> Parallax Crud Application </h1>
<div class="container">
<h2>Products</h2>
<a class="btn btn-primary float-right mb-4" href="{{url('/add-product')}}" >Add Product </a>

<table class="table table-dark table-striped-columns">
 <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th>Action</th>
    </tr>
 </thead>
 @foreach($products as $product)
 <tbody>
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td>{{$product->price}}</td>
<td>{{$product->category->name}}</td>

<td style="display:flex">
<div>
<a href="{{url('/edit-product/' .$product->id)}}" class="btn btn-primary mr-2">Edit</a>
</div>

<form method="post" action="{{url('/delete-product/' .$product->id)}}">
{{method_field('delete')}}
{{csrf_field()}}
<button class="btn btn-danger" type="submit"> Delete</button>
</form>

</td>
@endforeach
 </tbody>
</table>
</div>