<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\AttributeList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AttributeListController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AttributeList  $attributeList
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeList $attributeList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AttributeList  $attributeList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attributes = Attribute::all();
        $attributeList = \App\AttributeList::findOrFail($id);
        return view('admin.modules.edit-modules.attribute-module', compact('attributeList', 'attributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AttributeList  $attributeList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $attributeList)
    {
        Attribute::where('parent_id',$attributeList)->delete();
        foreach($request->parent_attribute as $i => $item){
            $id = Attribute::create([
                'parent_id' => $attributeList,
                'name' => $item,
                'is_child' => 0
            ]);
            if(isset($request->child_attribute[$i])) {
                foreach ($request->child_attribute[$i] as $chitem) {
                    Attribute::create([
                        'parent_id' => $attributeList,
                        'name' => $chitem,
                        'is_child' => $id->id
                    ]);
                }
            }
        }
        AttributeList::findOrFail($attributeList)->touch();
        Session::flash('updated_post', 'Modul bol upravený');
        if(Cookie::get('return_page'))
            return redirect(Cookie::get('return_page'));
        else
            return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AttributeList  $attributeList
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttributeList $attributeList)
    {
        //
    }
}
