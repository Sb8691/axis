<?php

View::share('photos', \App\Photo::all());
View::share('texts', \App\TextModule::all());
View::share('ctas', \App\CTA::all());

Route::get('/', function () {
    return view('frontend.domov');
});

Route::get('/kontakt', function () {
    return view('frontend.kontakt');
})->name('kontakt');

Route::get('/referencie', function () {
    return view('frontend.referencie');
})->name('referencie');

Route::get('/referencia/{id}-{placeholder}', function ($id, $placeholder) {
    $referencia = \App\Referencia::find($id);
    return view('frontend._konkretna-referencia', compact('referencia'));
});

Route::get('/o-nas', function () {
    return view('frontend.o-nas');
})->name('o-nas');

Route::get('/uspory-v-osvetleni', function () {
    return redirect('/zelena-podnikom', 301);
})->name('uspory-v-osvetleni');

Route::get('/zelena-domacnostiam', function () {
    return response()->redirectTo('/zelena-podnikom');
})->name('zelena-podnikom');
Route::get('/zelena-podnikom', function () {
    return view('frontend.zelena-podnikom');
})->name('zelena-podnikom');

Route::get('/led-osvetlenie', function () {
    return view('frontend.led-osvetlenie');
})->name('led-osvetlenie');

Route::get('/fotovoltaika', function () {
    return view('frontend.fotovoltaika');
})->name('fotovoltaika');

Route::get('/bess', function () {
    return view('frontend.bess');
})->name('bess');

Route::post('/send', 'mailer@send');

Auth::routes();

Route::group(['middleware'=>'auth'], function() {
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::resource('/admin/text-module', 'TextModuleController');
    Route::resource('/admin/photo-module', 'PhotoController');
    Route::resource('/admin/cta-module', 'CTAController');
    Route::resource('/admin/gallery-module', 'GalleryController');
    Route::resource('/admin/slider-module', 'SliderController');
    Route::resource('/admin/slide-module', 'SlideController');
    Route::resource('/admin/counter-module', 'CounterController');
    Route::resource('/admin/reference-module', 'ReferenciaController');
    Route::resource('/admin/reference-category-module', 'ReferenciaCategoryController');
    Route::resource('/admin/logo-module', 'LogosListController');
    Route::resource('/admin/attribute-module', 'AttributeListController');
    Route::resource('/admin/product-module', 'ProductController');
    Route::resource('/admin/product-category-module', 'ProductCategoryController');
    Route::post('/admin/cropper/crop-photo', 'Cropper@crop');
    Route::post('/admin/reference-module/sort', 'ReferenciaController@sort');
    Route::post('/admin/reference-category-module/sort', 'ReferenciaCategoryController@sort');

    Route::post('/admin/produkty-v-paticke/upravit', function(\Symfony\Component\HttpFoundation\Request $request){
        foreach($request->title as $id => $title) {
            \App\TextModule::findOrFail($id)->update(['title'=>$title]);
        }
        return redirect('/admin/paticka');
    });
    /* AJAX */
        /* -- GALLERY -- */
        Route::post('/admin/create-tag',   ['uses'=>'TagController@create']);
        Route::post('/admin/delete-tag',   ['uses'=>'TagController@deleteTag']);
        Route::post('/admin/get-all-tags',   ['uses'=>'TagController@getAllTags']);
        /* -- SLIDER -- */
        Route::post('/admin/create-new-slide',   ['uses'=>'SlideController@createNewSlide']);
        Route::post('/admin/delete-slide',   ['uses'=>'SlideController@deleteSlide']);
    /* END AJAX */
    Route::post('/admin/slide-module/create',   ['uses'=>'SlideController@create']);
    Route::get('admin/nastenka', function(){
        return view('admin.subpages.nastenka');
    });
    Route::get('admin/referencia/sprava-kategorii-referencii', function(){
        return view('admin.subpages.sprava_kategorii_referencii');
    });
    Route::get('admin/domov', function(){
        return view('admin.subpages.domov');
    });
    Route::get('admin/zelena-podnikom', function(){
        return view('admin.subpages.zelena-podnikom');
    });
    Route::get('admin/referencie', function(){
        return view('admin.subpages.referencie');
    });
    Route::get('admin/referencia/zoznam', function(){
        return view('admin.subpages.referencia.zoznam');
    });
    Route::get('admin/referencia/pridat', function(){
        return view('admin.subpages.referencia.pridat');
    });
    Route::get('admin/kontakt', function(){
        return view('admin.subpages.kontakt');
    });
    Route::get('admin/uspory-v-osvetleni', function(){
        return view('admin.subpages.uspory-v-osvetleni');
    });
    Route::get('admin/fotovoltaika', function(){
        return view('admin.subpages.fotovoltaika');
    });
    Route::get('admin/led-osvetlenie', function(){
        return view('admin.subpages.led-osvetlenie');
    });
    Route::get('admin/o-nas', function(){
        return view('admin.subpages.o-nas');
    });
    Route::get('admin/paticka', function(){
        return view('admin.subpages.paticka');
    });
    /* TESTING ROUTE */
   /* Route::get('/testing-route', function(){
       return view('test');
    });*/
    Route::get('admin/cropper/{path}/{aspectRatio}/{minCropboxWidth}/{orientation}', function($path, $aspectRatio, $minCropboxWidth, $orientation){
        return view('admin.modules.additional.cropper.cropper', compact('path', 'aspectRatio', 'minCropboxWidth', 'orientation'));
    });
});