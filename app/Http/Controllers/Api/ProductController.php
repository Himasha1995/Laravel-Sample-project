<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
        return $product;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->type=$request->type;
        $product->active=$request->active;
        $product->save();
        if($request->model='model'){
            return ["result"=>"Product created"];

        }else{
            return ["result"=>"Product creation unsucessful"];
    }
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        //
      //  $product= Product::find($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->status=$request->status;
        $product->category_id=$request->category_id;
        $result = $product->save();
       // return redirect()->Route('dashboard.index');
       if($result){
        return ["result"=>"Product updated"];
       }else{
        return ["result"=>"Product update unsucsseful"];
       }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $result = $product->delete();
        if ($result){
            return ["result"=>"Product deleted"];
        }else{
            return ["result"=>"Product delete unsucessful"];
        }
    }
    
}
