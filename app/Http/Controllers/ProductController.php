<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use File;
class ProductController extends Controller
{
    public function index()
    {
        $product=product::all();
        return view('products.index', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    { 
        $product= new Product;
        $product->name= $request->input('name');

        if($request->hasfile('image'))
        {
        $file= $request->file('image');
        $extension= $file->getClientOriginalExtension();
       // dd($extension);
        if($extension=='jpg'){
            $filename= time().'.'.$extension;
            $file->move('uploads/product/', $filename);
            $product->image= $filename;
        }else{
            return back()->with('status','image should jpg');
        }
       
        }
        $product->save();
        return redirect()->back()->with('status', 'product added successfully');
    }
    public function show()
    {
        $data= product::all();
        return view('list', ['products'=>$data]);
    }
    public function showdata($id)
    {
        $data= Product::find($id);
        return view('products.edit', ['data'=>$data]);
    }
    public function update(Request $req)
    {
        $data= Product::find($req->id);
        $data->name= $req->name;
        
        if($req->hasfile('image'))
        {
            $destinationPath = 'uploads/product/'.$data->image;
            File::delete($destinationPath.'/your_file');
        $file= $req->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time().'.'.$extension;
        $file->move('uploads/product/', $filename);
        $data->image= $filename;
        }

        //$data->image=$req->image;
        $data->save();
        return redirect('/list');
    }
    public function delete($id)
    {
        $data= product::find($id);
        $data->delete();
        return redirect('/list');
    }
}
