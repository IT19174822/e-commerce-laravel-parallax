<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<h1>Edit your product here</h1>
<br>
<div class="container">

<form method="post" action="{{url('/edit-product/' .$product->id)}}">
    {{csrf_field()}}
    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Product Name</label>
    <input type="text" name="name" value="{{old('name') ?? $product->name}}" class="form-control"  placeholder="Enter Name">
  </div>
  <div class="mb-3">
    <label  class="form-label">Product Price</label>
    <input type="number" name ="price" value="{{old('price') ?? $product->price}}"  class="form-control"  placeholder="Enter Price">
  </div>

  <select name="category_id" class="form-control">
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>
  
  </ul>
</div>
<br><br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>