<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Tag;

class GalleryController extends Controller
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($gallery)
    {
        $gallery = Gallery::findOrFail($gallery);
        $galleryPhotos = $gallery->photos()->get()->pluck('path','id');
        $tags = Tag::where('gallery_id', $gallery->id)->get();
        return view('admin.modules.edit-modules.gallery-module', compact('gallery', 'galleryPhotos', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $gallery)
    {
        /*foreach($request['ntags'] as $tag){
            Tag::create([
                'name' => $tag,
                'gallery_id' => $gallery
            ]);
        }*/

        include(app_path() . '/Http/Controllers/ImageResize.php');

        /*$validator = Validator::make($request->all(), [
            'path' => 'mimes:jpg,jpeg|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }*/
        if(isset($request->description))
        foreach($request->description as $id => $desc){
            Photo::findOrFail($id)->update([
               'description' => $desc
            ]);
        }
        if(isset($request->existing_filters))
        foreach($request->existing_filters as $id => $tag){
            Photo::findOrFail($id)->update([
                'tag_id' => $tag
            ]);
        }


/*
        foreach($request->tag_id as $id => $tag){
            if($tag == 'placeholder') $tag = 0;
            Photo::findOrFail($id)->update([
                'tag_id' => $tag
            ]);
        }
*/
        if(sizeOf($request['path']) != 0){
            foreach($request['path'] as $p => $x){
                $name = time().$x->getClientOriginalName();
                $x->move('images/uploaded', $name);
                processFile($name);
                if(!isset($request['descriptions'][$p])){
                    $desc = '';
                } else{
                    $desc =$request['descriptions'][$p];
                }
                if(!isset($request['filters'][$p])){
                    $filt = -1;
                } else{
                    $filt =$request['filters'][$p];
                }
                Photo::create([
                    'path'=> $name,
                    'text_module_id' => 1,
                    'description' => $desc,
                    'tag_id' => $filt,
                    'gallery_id' => $gallery,
                    'has_description' => 1
                ]);
            }
        }

        if(sizeof($request['delete'])!= 0){
            foreach($request['delete'] as $d){
                $tM = Photo::findOrFail($d);
                if(!empty($tM->path) && file_exists(public_path().'/images/uploaded/'.$tM->path) && file_exists(public_path().'/images/uploaded/mini/'.$tM->path)) {
                    unlink(public_path().'/images/uploaded/'.$tM->path);
                    unlink(public_path().'/images/uploaded/mini/'.$tM->path);
                }
                $tM->delete();
            }
        }
        Gallery::findOrFail($gallery)->update(['name'=>$request['name']]);
        Session::flash('updated_post', 'Galéria bola upravená');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
