<?php

namespace App\Http\Controllers;

use App\CTA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CTAController extends Controller
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
     * @param  \App\CTA  $cTA
     * @return \Illuminate\Http\Response
     */
    public function show(CTA $cTA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CTA  $cTA
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ctaModule = \App\CTA::findOrFail($id);
        return view('admin.modules.edit-modules.cta-module', compact('ctaModule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CTA  $cTA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cta)
    {
        isset($request['title']) ? $title = $request['title'] : $title = null;
        isset($request['subtitle']) ? $subtitle = $request['subtitle'] : $subtitle = null;

        $button_link = $request['button_link'];
        $button_text = $request['button_text'];

        if($button_link == 'ine') {
            $button_link = $request->button_link_custom;
        }

        CTA::findOrFail($cta)->update([
            'title' => $title,
            'subtitle' => $subtitle,
            'button_link' => $button_link,
            'button_text' => $button_text
        ]);

        Session::flash('updated_post', 'Modul bol upravený');
        if(Cookie::get('return_page'))
            return redirect(Cookie::get('return_page'));
        else
            return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CTA  $cTA
     * @return \Illuminate\Http\Response
     */
    public function destroy(CTA $cTA)
    {
        //
    }
}
