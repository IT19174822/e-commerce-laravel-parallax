<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<h1> Parallax Crud Application </h1>
<div class="container">
<h2>categories</h2>
<a class="btn btn-primary float-right mb-4" href="{{url('/add-category')}}" >Add category </a>

<table class="table table-dark table-striped-columns">
 <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Date Created</th>
    </tr>
 </thead>
 @foreach($categories as $category)
 <tbody>
<td>{{$category->id}}</td>
<td>{{$category->name}}</td>
<td>{{$category->created_at}}</td>

@endforeach
 </tbody>
</table>
</div>