<!DOCTYPE html>
<html lang="sk">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122679283-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-122679283-1');
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Projektovanie, realizácia a financovanie LED osvetlenia</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="Projektovanie, realizácia a financovanie LED osvetlenia">
    <meta name="robots" content="index, follow">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('rs-plugin/css/settings.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="tcvpb_icons_elegant-css" href="{{ asset('css/icons/elegant.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="tcvpb_theme_icons-css" href="{{ asset('css/icons/icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="inspirado_core_icons-css" href="{{ asset('css/core-icons/core_style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="inspirado_css_scripts-css" href="{{ asset('css/scripts.css') }}" type="text/css" media="all">
    <!--<link rel="stylesheet" id="inspirado_google_fonts-css" href="https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C400italic%2C700&amp;subset=latin%2Clatin-ext" type="text/css" media="all">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" id="inspirado_main_css-css" href="{{ asset('css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/importer.css') }}?timestamp={{ time() }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" media="all">
    <style>
        #cookies-message {

            position: fixed;

            bottom: 0;

            left: 0;

            width: 100%;

            padding: 2px 12px;

            text-align: center;

            background-color: #222222;

            z-index: 99999999;

            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.27);

        }

        #cookies-message p {

            color: #eee;

            font-size: 12px;

            margin-bottom: 0;

            line-height: 14px;

            padding: 2px 0;

        }

        #cookies-message a {

            color: #fff;

            font-weight: bold;

        }

        #cookies-message button {

            background: none;

            border: none;

            font-weight: bold;

            color: #fff;

            padding: 0;

            margin-left: 10px;

        }

        #cookiesModal {

            z-index: 99999999;

        }

        #cookiesModal .modal-body {

            padding: 10px 15px;
            padding-left: 25px;

        }

        #cookiesModal .close {

            top: 15px;

            right: 15px;

            line-height: 37px;

        }

        @media screen and (min-width: 1199px) {

            #cookiesModal .modal-dialog {

                max-width: 1140px;

            }

        }
    </style>
    @yield('styles')
</head>

<body class="page page-template-page-portfolio">
    <div id="preloader"></div>
    <?php
    function WhatPageIsThis()
    {
        return $_SERVER['REQUEST_URI'];
    }
    ?>
    <header id="ABdev_main_header" class="header_layout_default clearfix">
        <div id="main_menu_container">
            <div class="container menu_container">
                <div class="row">
                    <div class="span5 first_menu">
                        <nav>
                            <ul id="main_menu_left" class="">
                                {{-- <li class="menu-item {{ WhatPageIsThis() == '/' ? 'current-menu-item current_page_item' : '' }} ">
                                <a href="/" class="main-menu-link" title="Domov">
                                    <span>Domov</span>
                                </a>
                                </li> --}}
                                <li class="menu-item @if (WhatPageIsThis() == '/o-nas') current-menu-item current_page_item @endif">
                                    <a href="{{ route('o-nas') }}" class="main-menu-link" title="O nás">
                                        <span>O nás</span>
                                    </a>
                                </li>
                                <li class="menu-item @if (WhatPageIsThis() == '/led-osvetlenie') current-menu-item current_page_item @endif">
                                    <a href="{{ route('led-osvetlenie') }}" class="scroll" title="Led osvetlenie">
                                        <span>LED OSVETLENIE</span>
                                    </a>
                                </li>
                                <li class="menu-item @if (WhatPageIsThis() == '/fotovoltaika') current-menu-item current_page_item @endif">
                                    <a href="{{ route('fotovoltaika') }}" class="scroll" title="Fotovoltaika">
                                        <span>FOTOVOLTIKA</span>
                                    </a>
                                </li>
                                <li class="menu-item @if (WhatPageIsThis() == '/bess') current-menu-item current_page_item @endif">
                                    <a href="{{ route('bess') }}" class="scroll" title="BESS">
                                        <span>BESS</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="span2 tcvpb-centered">
                        <div id="logo">
                            <a href="/">
                                <img src="{{ asset('logo.jpg') }}" alt="AXIS logo">
                            </a>
                        </div>
                    </div>
                    <div class="span5 second_menu">
                        <nav>
                            <ul id="main_menu_right" class="">
                                <li class="menu-item @if (WhatPageIsThis() == '/zelena-podnikom') current-menu-item current_page_item @endif">
                                    <a href="{{ route('zelena-podnikom') }}" class="main-menu-link" title="Úspory v osvetlení">
                                        <span>ZELENÁ PODNIKOM</span>
                                    </a>
                                </li>
                                {{-- <li class="menu-item {{ WhatPageIsThis() == '/uspory-v-osvetleni' ? 'current-menu-item current_page_item' : '' }}">
                                    <a href="{{ route('uspory-v-osvetleni') }}" class="main-menu-link" title="Úspory v osvetlení">
                                        <span>Úspory v osvetlení</span>
                                    </a>
                                </li> --}}


                                <li class="menu-item @if (WhatPageIsThis() == '/referencie') current-menu-item current_page_item @endif">
                                    <a href="{{ route('referencie') }}" class="main-menu-link" title="Referencie">
                                        <span>Referencie</span></a>
                                </li>
                                <li class="menu-item @if (WhatPageIsThis() == '/kontakt') current-menu-item current_page_item @endif">
                                    <a href="{{ route('kontakt') }}" class="main-menu-link" title="Kontakt">
                                        <span>Kontakt</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header_sidebar_toggle">
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div id="ABdev_header_spacer"></div>

    @yield('content')

    <section id="footer-form" class="tcvpb_section_tc tcvpb-inversed_text section_with_header title_text_after pattern_overlayed contact_section_style"
        style="background-image: url({{ asset('/images/uploaded/' . $photos->find(7)->path) }})">
        <header id="formular">
            <div class="tcvpb_container">
                @if (!Route::is('zelena-podnikom'))
                    <h3>
                        {{ $texts->find(11)->title }}
                    </h3>
                @endif
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12 tcvpb-animo" data-animation="fadeIn" data-trigger_pt="0" data-duration="1000" data-delay="200">
                    <div role="form" class="wpcf7" id="wpcf7-f5-p174-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/send" method="post" class="wpcf7-form" id="napiste-nam">
                            <style>
                                .alert.alert-success {
                                    background: #a9e6a9;
                                    color: #175217;
                                    border: 1px solid #7cbb7c;
                                    margin-bottom: 30px;
                                    padding: 9px 20px;
                                    text-align: center;
                                }

                                .alert.alert-danger {
                                    background: #f7a8a0;
                                    color: #522125;
                                    border: 1px solid #de8980;
                                    margin-bottom: 30px;
                                    padding: 9px 20px;
                                    text-align: center;
                                    list-style-position: inside;
                                }

                                .gdpr-btn {
                                    text-align: left;
                                }

                                .gdpr-btn input {
                                    width: 20px;
                                }

                                .gdpr-btn:focus,
                                .gdpr-brn:active,
                                .gdpr-btn input:focus,
                                .gdpr-btn input:active {
                                    outline: none;
                                    border: none;
                                    box-shadow: none;
                                }

                                .gdpr-btn label {
                                    color: black;
                                }

                                .gdpr-btn label a {
                                    color: #18457a;
                                }

                                .g-recaptcha {
                                    margin-left: 35px;
                                }

                                @media only screen and (max-width: 768px) {
                                    .g-recaptcha {
                                        margin-left: 0px;
                                    }

                                    .row.transparent_form {
                                        margin-left: 0px !important;
                                    }
                                }
                            </style>
                            @if (isset($errors) && $errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if (session()->has('success'))
                                <div class="alert alert-success">Správa bola odoslaná</div>
                            @endif
                            @if (session()->has('captcha_fail'))
                                <div class="alert alert-danger">Overenie reCaptcha zlyhalo</div>
                            @endif
                            {{ csrf_field() }}
                            <input type="text" name="website" value="" style="opacity: 0; visibility: hidden; width: 0">
                            <div class="row transparent_form">
                                <div class="span4">
                                    <span class="wpcf7-form-control-wrap your-name">
                                        {!! Form::text('name', null, ['class' => '', 'placeholder' => 'Meno', 'required']) !!}
                                    </span>
                                </div>
                                <div class="span4">
                                    <span class="wpcf7-form-control-wrap your-email">
                                        {!! Form::email('email', null, ['class' => '', 'placeholder' => 'Email', 'required']) !!}
                                    </span>
                                </div>
                                <div class="span4">
                                    <span class="wpcf7-form-control-wrap your-subject">
                                        {!! Form::text('subject', null, ['class' => '', 'placeholder' => 'Predmet', 'required']) !!}
                                    </span>
                                </div>
                            </div>
                            <div class="row transparent_form">
                                <span class="wpcf7-form-control-wrap your-message">
                                    {!! Form::textarea('message', null, ['class' => '', 'placeholder' => 'Správa', 'style' => 'height: 88px', 'required']) !!}
                                </span>
                                <div class="g-recaptcha" data-sitekey="6LeqKGkUAAAAABWonjGGgqHxfhd-gFZ554BV2_4A"></div>

                                <div class="span12 gdpr-btn">
                                    <input type="checkbox" id="gdpr-btn" value="Súhlasím so spracovaním osobných údajov" required>
                                    <label for="gdpr-btn"> Súhlasím so spracovaním <a target="_blank" href="axis-gdpr.pdf">osobných údajov</a></label>
                                </div>
                                <div class="span12 aligncenter">
                                    <input type="submit" value="ODOSLAŤ" class="wpcf7-form-control wpcf7-submit button-1">
                                </div>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="ABdev_main_footer">
        <div id="footer_columns">
            <div class="container">
                <div class="row">
                    <div class="span3 clearfix">
                        <div id="text-6" class="widget widget_text">
                            <h3 class="footer-widget-heading">{{ $texts->find(12)->title }}</h3>
                            <div class="textwidget">
                                <p>
                                    {{ $texts->find(12)->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span3 clearfix">
                        <div id="recent-posts-3" class="widget widget_recent_entries">
                            <h3 class="footer-widget-heading">KONTAKT</h3>
                            <div class="contact_info_widget">
                                <p>
                                    <i class="fa fa-phone"></i> <a href="tel:+421948465331"> +421 948 465 331</a>
                                </p>
                                <p>
                                    <i class="fa fa-envelope"></i> <a href="mailto:axises@axis.sk">axises@axis.sk</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span3 clearfix">
                        <div id="contact-info-2" class="widget contact-info">
                            <h3 class="footer-widget-heading">ADRESA</h3>
                            <div class="contact_info_widget">
                                <p>
                                    <i class="ci_icon-home2"></i>Gogoľova 18 <br>851 05 Bratislava
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span3 clearfix">
                        <div id="flickr-stream-3" class="widget flickr-stream">
                            <h3 class="footer-widget-heading">AXIS ES s.r.o.</h3>
                            <p>Projekty, inžiniering, inštalácia a servis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer_copyright">
            <div class="container">
                <div class="row">
                    <div id="footer_container">
                        <div class="row">
                            <div class="copyright span12">
                                Copyright © 2024 AXIS ES s.r.o.  Všetky práva vyhradené. Designed by <a href="http://webgaleria.sk" target="_blank">webgaleria.sk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back_to_top"><a href="#" id="back_to_top" title="Scroll to top"></a></div>
            </div>
        </div>
    </footer>

    @include('frontend.cookie-message')

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/prettify.js') }}"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyDUH5xT05f_04nQQPhPdiZNCJbXw0htUmA"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/portfolio-init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mediaelement/mediaelement.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mediaelement/mediaelement-and-player.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/widget.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/accordion.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sameHeight_v1_2.js') }}"></script>
    <!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('scripts')
    <script>
        (function($) {
            jQuery(document).ready(function($) {
                $('a[href^="#"].smoothScroll').bind('click', function(e) {
                    e.preventDefault();
                    var target = this.hash,
                        $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top - 90
                    }, 900, 'swing', function() {
                        window.location.hash = target;
                    });
                });
            });

            $(window).on('load', function() {
                $('#preloader').fadeOut(200);
            });
        })(jQuery);
    </script>
</body>

</html>
