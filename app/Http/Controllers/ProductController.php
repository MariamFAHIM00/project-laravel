<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin")->except([
            "index","show",
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('products.index')->with([
            "products"=>Product::latest()->paginate(8),
            "categories"=>Category::has("products")->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.products.create")->with([
            "categories"=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request,[
            "title"=>"required|min:3",
            "description"=>"required|min:10",
            "image"=>"required|image|mimes:png,jpg,jpeg|max:2048",
            "price"=>"required|numeric",
            "old_price"=>"required|numeric",
            "inStock"=>"required|numeric",
            "category_id"=>"required|numeric",
        ]);
        //add data
        if($request->has("image")){
            $file=$request->image;
            $imageName="images/products/".time()."_".$file->getClientOriginalName(); 
            $file->move(public_path("images/products"),$imageName);
            $title=$request->title;

            Product::create([
                "title"=>$title,
                "slug"=>Str::slug($title),
                "description"=>$request->description,
                "price"=>$request->price,
                "old_price"=>$request->old_price,
                "inStock"=>$request->inStock,
                "category_id"=>$request->category_id,
                "image"=>$imageName,
            ]);
            return redirect()->route("admin.products")->withSuccess("Product added");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        $categories=Category::all();
        return view("products.show",['product'=>$product,'categories'=>$categories])->with(["products"=>Product::latest()->paginate(4),
        "categories"=>Category::all(),]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        // $product=Product::find($id);
        $categories=Category::all();
        return view("admin.products.edit",['product'=>$product,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // $product=Product::find($id);
        //validation
        $this->validate($request,[
            "title"=>"required|min:3",
            "description"=>"required|min:10",
            "image"=>"image|mimes:png,jpg,jpeg|max:2048",
            "price"=>"required|numeric",
            "category_id"=>"required|numeric",
        ]);
        // update data
        if($request->has("image")){
            $image_path=public_path("images/products/".$product->image);
            if(File::exists($image_path)){
                unlink($image_path);
            }
            $file=$request->image;
            $imageName="images/products/".time()."_".$file->getClientOriginalName(); 
            $file->move(public_path("images/products"),$imageName);
            $product->image=$imageName;
            }
            $title=$request->title;
            $product->update([
                "title"=>$title,
                "slug"=>Str::slug($title),
                "description"=>$request->description,
                "price"=>$request->price,
                "old_price"=>$request->old_price,
                "image"=>$product->image,
                "inStock"=>$request->inStock,
                "category_id"=>$request->category_id,
                
            ]);
            return redirect()->route("admin.products")->withSuccess("product updated");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //delete data
            $image_path=public_path("images/products/".$product->image);
            if(File::exists($image_path)){
            unlink($image_path);
            }
            $product->delete();
            return redirect()->route("admin.products")->withSuccess("Product deleted");
    }
}
