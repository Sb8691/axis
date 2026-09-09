<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrácia | Projekt</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/dist/bootstrap.min.css" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i&amp;subset=latin-ext" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
    <link rel="stylesheet" href="{{asset('/css/importer.css')}}">
    <link rel="stylesheet" href="{{asset('/css/backend/backend_layout.css')}}">
    <link rel="stylesheet" href="{{asset('/css/backend/lacobox_v1_0.css')}}">
    <link rel="stylesheet" href="{{asset('/css/backend/backend-global-classes.css')}}">
    <link rel="stylesheet" href="{{asset('/js/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">

    <style>
        * {
            font-family: 'Roboto','Source Sans Pro', sans-serif;
        }
        .module i{ position: absolute;
            left: 15px; top: 50%; transform: translateY(-50%);}
    </style>
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini" style="background: unset; background-color: #222d32;">
<?php
function WhatPageIsThis(){
    return $_SERVER['REQUEST_URI'];
}
?>
        <!-- Site wrapper -->
<div id='message' style="position: absolute; top: 0; width: 100%; z-index: 9999999; text-align: center;">
    @if(Session::has('deleted_post'))
        <p class="alert alert-danger">{{session('deleted_post')}}</p>
    @endif
    @if(Session::has('created_post'))
        <p class="alert alert-success">{{session('created_post')}}</p>
    @endif
    @if(Session::has('updated_post'))
        <p class="alert alert-info">{{session('updated_post')}}</p>
    @endif
</div>


<!-- =============================================== -->
<style>
    #phone-menu { display: none; }
    .dropdown-menu a.active { color: #fff; background-color: #222d32 }
    .dropdown-menu a.active:hover { color: #fff; background-color: #222d32 }
    @media screen and (max-width: 767px) {
        #phone-menu { display: block; }
    }
    .tooltip { white-space: pre-line!important;}

    #obsah a.module:not(.btn):not(.iconpicker-item) { padding: 0px 5px; background-color: #222d32; width: 100%; padding-top: 15px; padding-bottom: 15px; display: block; text-align: center; color: white; transition: background-color 0.3s; height: 100%;}
    #obsah a.module:not(.btn):hover { background-color: #1a2226; }
    #obsah .row { margin: 10px 0;}
    .chh { position: relative;}
    #gallery-container input[type=checkbox] {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        margin-left: 5px;
    }
    .module { padding-left: 30px!important;}

    .nicEdit-main { background-color: white!important; margin: 0!important; padding: 6px!important; width: 100%!important;}
</style>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <h3 style="color: #fff; text-align: center;">Administrácia</h3>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">NAVIGÁCIA</li>

            <li class="<?php if(WhatPageIsThis() == '/admin/produkty/novy') echo 'active'; ?>"><a href="/admin/produkty/novy"><i class="fa fa-plus"></i> Pridať produkt</a></li>
            <li class="header">Referencie</li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencia/pridat') echo 'active'; ?>"><a href="/admin/referencia/pridat"><i class="fa fa-plus"></i> Pridať referenciu</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencia/zoznam') echo 'active'; ?>"><a href="/admin/referencia/zoznam"><i class="fa fa-list"></i> Zoznam referencií</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencia/sprava-kategorii-referencii') echo 'active'; ?>"><a href="/admin/referencia/sprava-kategorii-referencii"><i class="fa fa-list"></i> Správa kategórií referencií</a></li>
            <li class="header">Podstránky</li>
            <li class="<?php if(WhatPageIsThis() == '/admin/domov') echo 'active'; ?>"><a href="/admin/domov"><i class="fa fa-file"></i> Domov</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/o-nas') echo 'active'; ?>"><a href="/admin/o-nas"><i class="fa fa-file"></i> O nás</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/led-osvetlenie') echo 'active'; ?>"><a href="/admin/led-osvetlenie"><i class="fa fa-file"></i> LED osvetlenie</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/uspory-v-osvetleni') echo 'active'; ?>"><a href="/admin/uspory-v-osvetleni"><i class="fa fa-file"></i> Úspory v osvetlení</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/fotovoltaika') echo 'active'; ?>"><a href="/admin/fotovoltaika"><i class="fa fa-file"></i> Fotovoltaika</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/zelena-podnikom') echo 'active'; ?>"><a href="/admin/zelena-podnikom"><i class="fa fa-file"></i> Zelená podnikom</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencie') echo 'active'; ?>"><a href="/admin/referencie"><i class="fa fa-file"></i> Referencie</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/kontakt') echo 'active'; ?>"><a href="/admin/kontakt"><i class="fa fa-file"></i> Kontakt</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/paticka') echo 'active'; ?>"><a href="/admin/paticka"><i class="fa fa-file"></i> Pätička</a></li>
            <li class="header" style="height: 1px; padding: 2px;"></li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    Odhlásiť sa
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div id="obsah" class="content-wrapper row" style="height: 100%; ">
    <div id="phone-menu" class="dropdown" >
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%; border-radius: 0; background-color: #222d32; padding: 15px 0;">Menu
            <span class="caret"></span></button>
        <ul class="dropdown-menu " style="width: 100%;">
            <li class="header">NAVIGÁCIA</li>

            <li class="<?php if(WhatPageIsThis() == '/admin/produkty/novy') echo 'active'; ?>"><a href="/admin/produkty/novy"><i class="fa fa-plus"></i> Pridať produkt</a></li>
            <li class="header">Referencie</li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencia/pridat') echo 'active'; ?>"><a href="/admin/referencia/pridat"><i class="fa fa-plus"></i> Pridať referenciu</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencia/zoznam') echo 'active'; ?>"><a href="/admin/referencia/zoznam"><i class="fa fa-list"></i> Zoznam referencií</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencia/sprava-kategorii-referencii') echo 'active'; ?>"><a href="/admin/referencia/sprava-kategorii-referencii"><i class="fa fa-list"></i> Správa kategórií referencií</a></li>
            <li class="header">Podstránky</li>
            <li class="<?php if(WhatPageIsThis() == '/admin/domov') echo 'active'; ?>"><a href="/admin/domov"><i class="fa fa-file"></i> Domov</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/o-nas') echo 'active'; ?>"><a href="/admin/o-nas"><i class="fa fa-file"></i> O nás</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/led-osvetlenie') echo 'active'; ?>"><a href="/admin/led-osvetlenie"><i class="fa fa-file"></i> LED osvetlenie</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/uspory-v-osvetleni') echo 'active'; ?>"><a href="/admin/uspory-v-osvetleni"><i class="fa fa-file"></i> Úspory v osvetlení</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/fotovoltaika') echo 'active'; ?>"><a href="/admin/fotovoltaika"><i class="fa fa-file"></i> Fotovoltaika</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/referencie') echo 'active'; ?>"><a href="/admin/referencie"><i class="fa fa-file"></i> Referencie</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/kontakt') echo 'active'; ?>"><a href="/admin/kontakt"><i class="fa fa-file"></i> Kontakt</a></li>
            <li class="<?php if(WhatPageIsThis() == '/admin/paticka') echo 'active'; ?>"><a href="/admin/paticka"><i class="fa fa-file"></i> Pätička</a></li>
            <li class="header" style="height: 1px; padding: 2px;"></li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    Odhlásiť sa
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
    @yield('content')
</div>
<!-- /.content-wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/dist/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="/js/sameHeight_v1_1.js"></script>
<script src="/js/backend/lacobox_v1_0.js"></script>
<script src="{{asset('/js/ckeditor/ckeditor.js')}}"></script>

<script>
    if($('#message').height() > 0){
        setTimeout(function(){
            $('#message').slideUp(1000);
        }, 4000);
    }

    //CKEDITOR.replaceClass = 'ckeditor';
    var configShared = {
        forcePasteAsPlainText: true,
        plugins: 'wysiwygarea,toolbar,basicstyles,list'
    };
    config = CKEDITOR.tools.prototypedCopy(configShared);

    if($('#editor1').length > 0)
        CKEDITOR.replace('editor1', config);
    if($('#editor2').length > 0)
        CKEDITOR.replace('editor2', config);
    if($('#editor3').length > 0)
        CKEDITOR.replace('editor3', config);


    //bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

    function setCKEDITORdata(form) {
        $('textarea.ckeditor').each(function () {
            var $textarea = $(this);
            $textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
        });

        $(form).submit();
    }
</script>
@yield('scripts')
</body>
</html>
