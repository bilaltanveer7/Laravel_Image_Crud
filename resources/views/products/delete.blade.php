<h1> Delete files here </h1>

<form action='/delete' method='POST'>
    @csrf
    <input type='hidden' name='id' value="{{$data->id}}"><br> <br>
    <input type='text' name='name' value="{{$data->name}}" ><br> <br>
    <input type='file' name='image' value="{{$data->image}}"><br> <br>
    <button type='submit'> Update </button>

</form>