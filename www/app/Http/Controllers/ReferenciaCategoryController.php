<?php

namespace App\Http\Controllers;

use App\ReferenciaCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReferenciaCategoryController extends Controller
{
    public function store(Request $request)
    {
        ReferenciaCategory::create($request->all());

        Session::flash('created_post', 'Kategória bola pridaná');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        ReferenciaCategory::findOrFail($id)->update($request->all());

        Session::flash('updated_post', 'Kategória bola upravená');
        return redirect()->back();

    }

    public function destroy($id)
    {
       // DB::table('product_category_product')->where('category_id', $productCategory)->delete();
        ReferenciaCategory::findOrFail($id)->delete();

        Session::flash('deleted_post', 'Kategória bola odstránená');
        return redirect()->back();
    }

    public function sort(Request $request) {
        if(sizeof($request->sort) > 0) {
            foreach ($request->sort as $index => $id) {
                ReferenciaCategory::find($id)->update(['sort'=>$index]);
            }
        }

        Session::flash('updated_post', 'Kategórie boli zoradené');
        return redirect()->back();
    }
}
