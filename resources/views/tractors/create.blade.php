
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="createTractor" id="createTractor" method="post" action="{{url('create')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Brand</label>
          <input type="text" id="brand" name="brand" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Model</label>
          <textarea name="model" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
