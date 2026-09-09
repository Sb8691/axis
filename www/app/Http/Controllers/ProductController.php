<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        include(app_path() . '/Http/Controllers/ImageResizeV2.php');
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        if($file = $request->file('path')){
           if(checkFileDimensions(350, 200, $request->path) != true) {
                Session::flash('deleted_post', 'Nahratá fotografia je menšia ako minimálna povolená veľkosť');
                return redirect()->back()->withInput()->with('parameter', $request->parameter)->with('description', $request->description)->with('categories', $request->product_category);
            }

            $name = time().$file->getClientOriginalName();
            $file->move('images/uploaded/', $name);
            list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize("images/uploaded/" . $name);
            if($originalHeight > 600 || $originalWidth > 400){
                $return_page = ImageCropper($originalWidth, $originalHeight, 600, 400, $name);
            }
        }
        $product = Product::create([
            'name' => $request->name,
            'path' => $name,
            'perex' => $request->perex,
            'description' => $request->product_description
        ]);

        if(sizeof($request->parameter) > 0) {
            foreach($request->parameter as $i => $parameter) {
                ProductParameter::create([
                    'product_id' => $product->id,
                    'parameter' => $parameter,
                    'description' => $request->description[$i]
                ]);
            }
        }

        if(sizeof($request->product_category) > 0){
            $product->categories()->detach();

            foreach($request->product_category as $category) {
                $product->categories()->attach($category);
            }
        }

        Session::flash('created_post', 'Produkt bol pridaný');
        if(isset($return_page)) return redirect('/admin/product-module/'.$product->id.'/edit');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = Product::findOrFail($product);
        return view('admin.subpages.upravit_produkt', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        include(app_path() . '/Http/Controllers/ImageResizeV2.php');
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        $pr = Product::findOrFail($product);

        $name = $pr->path;

        if($file = $request->file('path')){
            if(checkFileDimensions(350, 200, $request->path) != true) {
                Session::flash('deleted_post', 'Nahratá fotografia je menšia ako minimálna povolená veľkosť');
                return redirect()->back()->withInput()->with('parameter', $request->parameter)->with('description', $request->description)->with('categories', $request->product_category);
            }

            if(file_exists(public_path()."images/uploaded/" . $name)) {
                unlink(public_path()."images/uploaded/" . $name);
            }

            $name = time().$file->getClientOriginalName();
            $file->move('images/uploaded/', $name);
            list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize("images/uploaded/" . $name);
            if($originalHeight > 600 || $originalWidth > 400){
                $return_page = ImageCropper($originalWidth, $originalHeight, 600, 400, $name);
            }
        }

        $pr->update([
            'name' => $request->name,
            'path' => $name,
            'perex' => $request->perex,
            'description' => $request->product_description
        ]);


        ProductParameter::where('product_id', $pr->id)->delete();

        if(sizeof($request->parameter) > 0){
            foreach($request->parameter as $i => $parameter) {
                ProductParameter::create([
                    'product_id' => $pr->id,
                    'parameter' => $parameter,
                    'description' => $request->description[$i]
                ]);
            }
        }

        if(sizeof($request->product_category) > 0){
            $pr->categories()->detach();

            foreach($request->product_category as $category) {
                $pr->categories()->attach($category);
            }
        }

        Session::flash('created_post', 'Produkt bol upravený');
        if(isset($return_page)) return redirect('/admin/product-module/'.$pr->id.'/edit');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $pr = Product::findOrFail($product);
        $pr->categories()->detach();
        $pr->params()->delete();
        $pr->delete();

        Session::flash('deleted_post', 'Produkt bol odstránený');
        return redirect('/admin/produkty/zoznam');
    }
}
