<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class ReferenceController extends Controller
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
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reference = \App\Reference::findOrFail($id);
        return view('admin.subpages.referencia.upravit', compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reference)
    {
        include(app_path() . '/Http/Controllers/ImageResize.php');

        $data = $request->all();
        $ref = Reference::findOrFail($reference);
        if($file = $request->file('path')){
            if(!empty($ref->path) && file_exists(public_path().'/images/uploaded/'.$ref->path) && file_exists(public_path().'/images/uploaded/mini/'.$ref->path)) {
                unlink(public_path().'/images/uploaded/'.$ref->path);
                unlink(public_path().'/images/uploaded/mini/'.$ref->path);
            }
            $name = time().$file->getClientOriginalName();
            $file->move('images/uploaded', $name);
            processFile($name);
            $data['path'] = $name;
        }

        $ref->update($data);
        Session::flash('updated_post', 'Referencia bola upravená');
        if(Cookie::get('return_page'))
            return redirect(Cookie::get('return_page'));
        else
            return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reference $reference)
    {
        //
    }
}
