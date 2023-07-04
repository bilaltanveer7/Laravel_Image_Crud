<h1> Add Image</h1>

<a href="{{ url('product') }}" class='btn btn-danger btn-sm'> Back Button </a> <br> <br>

@if(session('status'))
<h6 class='alert alert-success'>{{session('status')}}</h6>
@endif
<form action="{{ ('add product') }}" method='POST' enctype='multipart/form-data'>
    @csrf
    <div class='form-group mb-3'>
        <label for=''>Name: </label>
        <input type='text' name='name' class='form-control'>
    </div>

    <div class='form-group mb-3'>
        <label for=''>Upload Image: </label>
        <input type='file' name='image' class='form-control'> 
    </div>

    <div class='form-group mb-3'>
        <button type='submit' class='btn btn-primary'> Submit </button>
    </div>
    <a href="{{url('list')}}" class='btn btn-danger btn-sm'> Show Data </a> <br> <br>

</form>