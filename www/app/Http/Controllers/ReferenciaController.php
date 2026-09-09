<?php

namespace App\Http\Controllers;

use App\Referencia;
use App\ReferenciaParameter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReferenciaController extends Controller
{
    function makeFilenameURLFriendly($filename, $replacement = '-') {
        return preg_replace('/[^a-z.0-9]+/i', $replacement, iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $filename));
    }

    public function store(Request $request)
    {
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        $data = $request->all();

        if($file = $request->file('gallery_path')){
            $name = time().$this->makeFilenameURLFriendly($file->getClientOriginalName());
            $file->move('images/uploaded', $name);

            list($originalWidth, $originalHeight, $type, $attr) = getimagesize(public_path().'/images/uploaded/'.$name);

            if($originalWidth < 500 || $originalHeight < 300) {
                Session::flash('deleted_post', 'Fotografia nespĺňa minimálne požadované rozmery! ( 500x300 )');
                return redirect()->back();
            }

            ImageCropper($originalWidth, $originalHeight, 500, 300, $name);
            $data['gallery_path'] = $name;
        }

        if($file = $request->file('header_path')){
            $name = time().$this->makeFilenameURLFriendly($file->getClientOriginalName());
            $file->move('images/uploaded', $name);

            list($originalWidth, $originalHeight, $type, $attr) = getimagesize(public_path().'/images/uploaded/'.$name);

            if($originalWidth < 1170 || $originalHeight < 420) {
                Session::flash('deleted_post', 'Fotografia nespĺňa minimálne požadované rozmery! ( 1170x420 )');
                return redirect()->back();
            }

            ImageCropper($originalWidth, $originalHeight, 1170, 420, $name);
            $data['header_path'] = $name;
        }

        $referencia = Referencia::create($data);

        if(sizeof($request->param_name) > 0) {
            foreach ($request->param_name as $index => $x) {
                ReferenciaParameter::create(['sort'=>$index,'name'=>$request->param_name[$index], 'value'=>$request->param_value[$index], 'referencia_id'=>$referencia->id]);
            }
        }

        Session::flash('created_post', 'Referencia bola pridaná');
        return redirect()->back();
    }

    public function edit($id)
    {
        $reference = Referencia::find($id);
        return view('admin.subpages.referencia.upravit', compact('reference'));
    }

    public function update(Request $request, $id)
    {
        include(app_path() . '/Http/Controllers/ImageCropper.php');

        $referencia = Referencia::find($id);

        $data = $request->all();

        if($file = $request->file('gallery_path')){
            $name = time().$this->makeFilenameURLFriendly($file->getClientOriginalName());
            $file->move('images/uploaded', $name);

            list($originalWidth, $originalHeight, $type, $attr) = getimagesize(public_path().'/images/uploaded/'.$name);

            if($originalWidth < 500 || $originalHeight < 300) {
                Session::flash('deleted_post', 'Fotografia nespĺňa minimálne požadované rozmery! ( 500x300 )');
                return redirect()->back();
            }

            ImageCropper($originalWidth, $originalHeight, 500, 300, $name);

            if(!empty($referencia->gallery_path) && file_exists(public_path().'/images/uploaded/'.$referencia->gallery_path)) {
                unlink(public_path().'/images/uploaded/'.$referencia->gallery_path);
            }

            $data['gallery_path'] = $name;
        }

        if($file = $request->file('header_path')){
            $name = time().$this->makeFilenameURLFriendly($file->getClientOriginalName());
            $file->move('images/uploaded', $name);

            list($originalWidth, $originalHeight, $type, $attr) = getimagesize(public_path().'/images/uploaded/'.$name);

            if($originalWidth < 1170 || $originalHeight < 420) {
                Session::flash('deleted_post', 'Fotografia nespĺňa minimálne požadované rozmery! ( 1170x420 )');
                return redirect()->back();
            }

            if(!empty($referencia->header_path) && file_exists(public_path().'/images/uploaded/'.$referencia->header_path)) {
                unlink(public_path().'/images/uploaded/'.$referencia->header_path);
            }

            ImageCropper($originalWidth, $originalHeight, 1170, 420, $name);
            $data['header_path'] = $name;
        }

        $referencia->update($data);

        $referencia->parameters()->delete();
        if(sizeof($request->param_name) > 0) {
            foreach ($request->param_name as $index => $x) {
                ReferenciaParameter::create(['sort'=>$index,'name'=>$request->param_name[$index], 'value'=>$request->param_value[$index], 'referencia_id'=>$referencia->id]);
            }
        }

        Session::flash('updated_post', 'Referencia bola upravená');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $referencia = Referencia::find($id);
        if(!empty($referencia->gallery_path) && file_exists(public_path().'/images/uploaded/'.$referencia->gallery_path)) {
            unlink(public_path().'/images/uploaded/'.$referencia->gallery_path);
        }
        if(!empty($referencia->header_path) && file_exists(public_path().'/images/uploaded/'.$referencia->header_path)) {
            unlink(public_path().'/images/uploaded/'.$referencia->header_path);
        }

        $referencia->delete();

        Session::flash('deleted_post', 'Referencia bola odstránená');
        return redirect('/admin/referencia/zoznam');
    }

    public function sort(Request $request){
        if(isset($request->sort)) {
            foreach ($request->sort as $sort => $id) {
                Referencia::find($id)->update(['sort'=>$sort]);
            }
        }

        Session::flash('updated_post', 'Poradie referencií bolo zmenené');
        return redirect()->back();
    }
}
