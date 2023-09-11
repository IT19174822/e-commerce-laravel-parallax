<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<br>
<div class="container">

<form method="post" action="{{url('/add-category')}}">
    {{csrf_field()}}
  <div class="mb-3">
    <label  class="form-label">category Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Name">
</div>
<br><br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>