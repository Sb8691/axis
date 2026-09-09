<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Slider;
use App\SlideSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
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
    public function create(Request $request)
    {
        include(app_path() . '/Http/Controllers/ImageResize.php');
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        $md = explode("x", Slider::findOrFail($request->slider_id)->minimal_dimensions);

        $messages = [
            'mimes' => 'Podporované formáty pre fotografie sú .jpg, .jpeg',
            'path.required' => 'Fotka je povinná',
            'title.required' => 'Titulka je povinná.'
        ];

        $validator = Validator::make(['path' => $request['path'], 'title'=>str_replace('<br>', '', $request['title'])], [
            'title' => 'required'
        ], $messages);

        $data = $request->all();
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }
        if($file = $request->file('path')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/uploaded', $name);

            list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize("images/uploaded/" . $name);

            if($originalWidth >= $md[0] && $originalHeight >= $md[1]) {
                $return_page = ImageCropper($originalWidth, $originalHeight, $md[0], $md[1], $name);

                // check file size and reduce it
                    if(filesize("images/uploaded/" . $name) / 1024 > 1000) {
                        imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 85);
                    }
                    else if(filesize("images/uploaded/" . $name) / 1024 > 750) {
                        imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 90);
                    }
                    else if(filesize("images/uploaded/" . $name) / 1024 > 500) {
                        imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 95);
                    }
            } else {
                unlink(public_path().'/images/uploaded/'. $name);
                Session::flash('deleted_post', 'Fotografia nespĺňa minimálne povolené rozmery!');
                return redirect()->back()->withInput();
            }
        }

        $data['path'] = $name;
        if($data['subtitle'] == "<br>")
            $data['subtitle'] = null;

        if($data['description'] == '<br>')
            $data['description'] = null;

        if($data['button_link'] == 'ine') {
            $data['button_link'] = $request->button_link_custom;
        }

        if($data['button_link_2'] == 'ine') {
            $data['button_link_2'] = $request->button_link_2_custom;
        }

        $id = Slide::create($data);
        SlideSetting::create([
           'slide_id' => $id->id
        ]);

        Slider::findOrFail($id->slider_id)->touch();

        Session::flash('created_post', 'Slide bol pridaný.');
        return back();
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
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = \App\Slide::findOrFail($id);
        return view('admin.modules.edit-modules.slide-module', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slide)
    {

        include(app_path() . '/Http/Controllers/ImageResize.php');
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        $sld = Slide::findOrFail($slide);
        $md = explode("x", Slider::findOrFail($sld->slider_id)->minimal_dimensions);

        $messages = [
            'mimes' => 'Podporované formáty pre fotografie sú .jpg, .jpeg',
            'path.required' => 'Fotka je povinná',
            'title.required' => 'Titulka je povinná.'
        ];

        $validator = Validator::make(['path' => $request['path'], 'title'=>str_replace('<br>', '', $request['title'])], [
            'title' => 'required'
        ], $messages);
        $name = Slide::findOrFail($slide)->path;
        $data = $request->all();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }
        if($file = $request->file('path')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/uploaded', $name);
            list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize("images/uploaded/" . $name);

            if($originalWidth >= $md[0] && $originalHeight >= $md[1]) {
                $return_page = ImageCropper($originalWidth, $originalHeight, $md[0], $md[1], $name);

                // check file size and reduce it
                if(filesize("images/uploaded/" . $name) / 1024 > 1000) {
                    imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 85);
                }
                else if(filesize("images/uploaded/" . $name) / 1024 > 750) {
                    imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 90);
                }
                else if(filesize("images/uploaded/" . $name) / 1024 > 500) {
                    imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 95);
                }
            } else {
                unlink(public_path().'/images/uploaded/'. $name);
                Session::flash('deleted_post', 'Fotografia nespĺňa minimálne povolené rozmery!');
                return redirect()->back()->withInput();
            }
        }
        $data['path'] = $name;
        isset($request['has_subtitle']) ? null : $data['has_subtitle'] = 1;
        isset($request['has_description']) ? null : $data['has_description'] = 1;
        isset($request['has_button']) ? null : $data['has_button'] = 1;
        isset($request['has_button_2']) ? null : $data['has_button_2'] = 1;
        isset($request['is_public']) ? null : $data['is_public'] = 1;

        if($data['subtitle'] == "<br>")
            $data['subtitle'] = null;
        if($data['description'] == '<br>')
            $data['description'] = null;

        if($data['button_link'] == 'ine') {
            $data['button_link'] = $request->button_link_custom;
        }

        if($data['button_link_2'] == 'ine') {
            $data['button_link_2'] = $request->button_link_2_custom;
        }

        $sld->update($data);
        $sld->settings->update($data);
        Slider::findOrFail($sld->slider_id)->touch();

        Session::flash('updated_post', 'Slide bol upravený.');
        if(Cookie::get('return_page'))
            return redirect(Cookie::get('return_page'));
        else
            return redirect('/admin/slider-module/'.$sld->slider_id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        //
    }

    public function createNewSlide()
    {
        // ABANDONED CODE
        $title = json_decode(stripslashes($_POST['title']));
        $id = json_decode(stripslashes($_POST['slider_id']));
        $is_public = json_decode(stripslashes($_POST['is_public']));
        // SUBTITLE
        $subtitle = null;
        if($has_subtitle = json_decode(stripslashes($_POST['has_subtitle'])) == 1){
            $subtitle = json_decode(stripslashes($_POST['subtitle']));
        }
        // DESCRIPTION
        $description = null;
        if($has_description = json_decode(stripslashes($_POST['has_description'])) == 1){
            $description = json_decode(stripslashes($_POST['description']));
        }
        // BUTTON 1
        $button_text = null;
        $button_link = null;
        if($has_button = json_decode(stripslashes($_POST['has_button'])) == 1){
            $button_text = json_decode(stripslashes($_POST['button_text']));
            $button_link = json_decode(stripslashes($_POST['button_link']));
        }
        // BUTTON 2
        $button_text_2 = null;
        $button_link_2 = null;
        if($has_button_2 = json_decode(stripslashes($_POST['has_button_2'])) == 1){
            $button_text_2 = json_decode(stripslashes($_POST['button_text_2']));
            $button_link_2 = json_decode(stripslashes($_POST['button_link_2']));
        }
        // PHOTO
        $photo = json_decode(stripslashes($_POST['path']));
        return $photo;
        $name = time().$photo->getClientOriginalName();
        $photo->move('images/uploaded', $name);
        processFile($name);
        //
        $data = [
            'title' => $title,
            'slider_id' => $id,
            'path' => $name,
            'subtitle' => $subtitle,
            'has_subtitle' => $has_subtitle,
            'description' => $description,
            'has_description' => $has_description,
            'button_text' => $button_text,
            'button_link' => $button_link,
            'has_button' => $has_button,
            'button_text_2' => $button_text_2,
            'button_link_2' => $button_link_2,
            'has_button_2' => $has_button_2,
            'is_public' => $is_public
        ];
        Slide::create($data);
        return 'success';
    }

    public function deleteSlide(){
        $id = json_decode(stripslashes($_POST['slide_id']));
        $slider_id = json_decode(stripslashes($_POST['slider_id']));
        Slide::findOrFail($id)->delete();
        $slides = Slide::where('slider_id', $slider_id)->get();
        return response()->json($slides);
    }
}
