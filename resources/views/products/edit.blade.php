<h1> Update List Data </h1>

<form action='/edit' method='POST' enctype="multipart/form-data">
    @csrf
    <input type='hidden' name='id' value="{{$data->id}}"><br> <br>
    <input type='text' name='name' value="{{$data->name}}" ><br> <br>
    <td> <img src="{{asset('uploads/product/'.$data->image) }}" width='100px' height='100px' alt='image'> </td>
    <input type='file' name='image' ><br> <br>
    <button type='submit'> Update </button>

</form>