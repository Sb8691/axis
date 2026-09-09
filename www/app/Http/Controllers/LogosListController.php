<?php

namespace App\Http\Controllers;

use App\Logo;
use App\LogosList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LogosListController extends Controller
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
     * @param  \App\LogosList  $logosList
     * @return \Illuminate\Http\Response
     */
    public function show(LogosList $logosList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LogosList  $logosList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logosList = \App\LogosList::findOrFail($id);
        $logos = $logosList->logos->sortBy('sort')->pluck('path','id');
        return view('admin.modules.edit-modules.logo-module', compact('logosList', 'logos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogosList  $logosList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $logosList)
    {
        include(app_path() . '/Http/Controllers/ImageResize.php');
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        $return_page = false;

        $list = LogosList::findOrFail($logosList);
        $data = $request->all();
        // NEW LOGOS
        if(sizeof($request->file('path')) > 0){
            foreach ($request->file('path') as $i => $path){
                $name = preg_replace('/[^a-z0-9]+/i', '-', iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', time().$path->getClientOriginalName()));
                $path->move('images/uploaded', $name);

                $logo['path'] = $name;
                $logo['alt'] = $request->alt[$i];
                $logo['logos_list_id'] = $logosList;
                if($list->has_links){
                    $logo['link'] = $request->link[$i];
                }

                $md = explode("x", $list->minimal_dimensions);
                list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize("images/uploaded/" . $name);
                if($originalWidth >= $md[0] && $originalHeight >= $md[1]) {
                    $return_page = ImageCropper($originalWidth, $originalHeight, $md[0], $md[1], $name);
                    Logo::create($logo);
                } else {
                    unlink(public_path().'/images/uploaded/'. $name);
                    $not_uploaded = true;
                }

            }
        }
        // UPDATING OLD LOGOS
        if(sizeof($request['old_logos']) > 0){
            foreach($request['old_logos'] as $i => $logo){
                $Udata = [
                    'link' => $request['links'][$logo],
                    'alt' => $request['alts'][$logo]
                ];
                if(isset($request['paths'][$logo])){
                    $path = $request->file('paths')[$logo];
                    $logo_to_change = Logo::findOrFail($logo);
                    if(!empty($logo_to_change->path) && file_exists(public_path().'/images/uploaded/'.$logo_to_change->path) && file_exists(public_path().'/images/uploaded/mini/'.$logo_to_change->path)) {
                        unlink(public_path() . '/images/uploaded/' . $logo_to_change->path);
                        unlink(public_path() . '/images/uploaded/mini/' . $logo_to_change->path);
                    }
                    $name = preg_replace('/[^a-z0-9]+/i', '-', iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', time().$path->getClientOriginalName()));
                    $path->move('images/uploaded', $name);

                    $md = explode("x", $list->minimal_dimensions);
                    list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize("images/uploaded/" . $name);

                    if($originalWidth >= $md[0] && $originalHeight >= $md[1]) {
                        $return_page = ImageCropper($originalWidth, $originalHeight, $md[0], $md[1], $name);
                        $Udata['path'] = $name;
                    } else {
                        unlink(public_path().'/images/uploaded/'. $name);
                        $not_uploaded = true;
                    }
                }

                Logo::findOrFail($logo)->update($Udata);
            }
        }
        if(sizeof($request->sort) > 0) {
            foreach($request->sort as $i => $logo_id) {
                Logo::findOrFail($logo_id)->update(['sort'=>$i]);
            }
        }
        // DELETING LOGOS
        if(sizeof($request['delete']) > 0){
            foreach($request['delete'] as $logo){
                $logo_to_delete = Logo::findOrFail($logo);
                if(!empty($logo_to_delete->path) && file_exists(public_path().'/images/uploaded/'.$logo_to_delete->path) && file_exists(public_path().'/images/uploaded/mini/'.$logo_to_delete->path)) {
                    unlink(public_path() . '/images/uploaded/' . $logo_to_delete->path);
                    unlink(public_path() . '/images/uploaded/mini/' . $logo_to_delete->path);
                }
                $logo_to_delete->delete();
            }
        }
        if(isset($not_uploaded)) {
            Session::flash('deleted_post', 'Niektoré fotky neboli nahraté z dôvodu nesprávnych rozmerov!');
            return redirect()->back();
        }

        Session::flash('updated_post', 'Modul bol upravený');
        if($return_page) return redirect()->back();
        if(Cookie::get('return_page'))
            return redirect(Cookie::get('return_page'));
        else
            return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogosList  $logosList
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogosList $logosList)
    {
        //
    }
}
