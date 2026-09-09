<?php

namespace App\Http\Controllers;

use App\TextModule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class TextModuleController extends Controller
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
     * @param  \App\TextModule  $textModule
     * @return \Illuminate\Http\Response
     */
    public function show(TextModule $textModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TextModule  $textModule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $textModule = \App\TextModule::findOrFail($id);
        return view('admin.modules.edit-modules.text-module', compact('textModule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TextModule  $textModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $textModule)
    {
        $request['content'] == null ? $request['content'] = '' : null;
        $request['content_2'] == null ? $request['content_2'] = '' : null;
        $data = [
            'title' => $request['title'],
            'content' => $request['content'],
            'content_2' => $request['content_2']
        ];
        $tM = TextModule::findOrFail($textModule)->update($data);
        Session::flash('updated_post', 'Modul bol upravený');
        if(Cookie::get('return_page'))
            return redirect(Cookie::get('return_page'));
        else
            return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TextModule  $textModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(TextModule $textModule)
    {
        //
    }
}
