<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
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
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photoModule = \App\Photo::findOrFail($id);
        return view('admin.modules.edit-modules.photo-module', compact('photoModule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $photo)
    {
        include(app_path() . '/Http/Controllers/ImageResize.php');
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        $messages = [
            'mimes' => 'Podporované formáty pre fotografie sú .jpg, .jpeg',
            //  'max' => 'Maximálna povolená veľkosť jednej fotky je 750kB'
        ];

        $validator = Validator::make($request->all(), [
            'path' => 'mimes:jpg,jpeg' //|max:750
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }

        $tM = Photo::findOrFail($photo);

        $name = $tM->path;
        if ($file = $request->file('path')) {
            $name = preg_replace('/[^a-z0-9]+/i', '-', iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', time() . $file->getClientOriginalName()));
            $file->move('images/uploaded', $name);

            // if ($tM->minimal_dimensions != null) {
            //     $md = explode("x", $tM->minimal_dimensions);
            //     $rWidth = $md[0];
            //     $rHeight = $md[1];

            //     list($originalWidth, $originalHeight, $type, $attr) = getimagesize(public_path() . '/images/uploaded/' . $name);

            //     if ($originalWidth < $rWidth || $originalHeight < $rHeight) {
            //         Session::flash('deleted_post', 'Fotografia nespĺňa minimálne požadované rozmery! ( ' . $tM->minimal_dimensions . ' )');
            //         return redirect()->back();
            //     }

            //     $return_back = ImageCropper($originalWidth, $originalHeight, $md[0], $md[1], $name);
            // }

            // check file dimensions and reduce them
            /* $resWidth = 1920;
             $resHeight = 2048;
             if($tM->minimal_dimensions != null) {
                 $md = explode("x", $tM->minimal_dimensions);
                     if( ($md[0] / ($width / $md[0])) >= $md[1] ) {
                         $resWidth = $md[0];
                         $resHeight = 3000;
                     } else {
                         $resWidth = 3000;
                         $resHeight = $md[1];
                     }
             }
             if($width > $resWidth || $height > $resHeight) {
                 $ow = 0; $oh = 0;
                 resizeImage("images/uploaded/" . $name, "images/uploaded/" . $name, $resWidth, $ow, $oh, $resHeight, false);
             }*/

            // check file size and reduce it
            if (filesize("images/uploaded/" . $name) / 1024 > 1000) {
                imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 80);
            } else if (filesize("images/uploaded/" . $name) / 1024 > 750) {
                imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 85);
            } else if (filesize("images/uploaded/" . $name) / 1024 > 500) {
                imagejpeg(imagecreatefromjpeg("images/uploaded/" . $name), "images/uploaded/" . $name, 90);
            }

            if (!empty($tM->path)) {
                if (file_exists(public_path() . '/images/uploaded/' . $tM->path))
                    unlink(public_path() . '/images/uploaded/' . $tM->path);
                if (file_exists(public_path() . '/images/uploaded/mini/' . $tM->path))
                    unlink(public_path() . '/images/uploaded/mini/' . $tM->path);
            }
        }
        processFile($name);
        $data = [
            'path' => $name,
            'description' => $request['description'],
            'link' => $request['link']
        ];
        $tM->update($data);
        Session::flash('updated_post', 'Modul bol upravený');
        if (isset($return_back)) return redirect()->back();
        if (Cookie::get('return_page'))
            return redirect(Cookie::get('return_page'));
        else
            return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
