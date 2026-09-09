<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $data = json_decode(stripslashes($_POST['data']));
        $id = json_decode(stripslashes($_POST['id']));
        foreach($data as $tag){
            Tag::create([
                'gallery_id' => $id,
                'name' => $tag
            ]);
        }

        $tags = Tag::where('gallery_id', $id)->get();
        return response()->json($tags);
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
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(){

    }

    public function deleteTag()
    {
        $id = json_decode(stripslashes($_POST['id']));
        Tag::findOrFail($id)->delete();
        $tags = Tag::where('gallery_id', $id)->get();
        return response()->json($tags);
    }

    public function getAllTags(){
        $gallery_id = json_decode(stripslashes($_POST['gallery_id']));
        $tags = Tag::where('gallery_id', $gallery_id)->get();
        return response()->json($tags);
    }
}
