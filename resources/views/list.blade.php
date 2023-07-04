<h1> List of the data </h1>

<table border='1'>
    <tr>
        <td> id </td>
        <td> name </td>
        <td> image </td>
        <td> operation </td>
        <td> operation </td>
    </tr>
    @foreach($products as $product)
    <tr>
        <td> {{$product['id']}} </td>
        <td> {{$product['name']}} </td>
        <td> <img src="{{asset('uploads/product/'.$product->image) }}" width='100px' height='100px' alt='image'> </td>
        <td> <a href={{"edit/" . $product->id}}> Edit </a> </td>
        <td> <a href={{"delete/" . $product->id}}> Delete </a> </td>
    </tr>
    @endforeach
    <a href="{{ url('product') }}" class='btn btn-primary btn-sm'> Add Product </a>
</table>