@extends('frontend._layout')
@section('title', 'Domov')
@section('meta_description', 'Poskytujeme komplexné služby na mieru od návrhu LED osvetlenia cez financovanie až po servis. Dajte zelenú vašim úsporám.')
@section('styles')
    <style>
        header#ABdev_main_header {
            background: white !important;
        }

        .tparrows {
            display: none !important;
        }

        .owl-item {
            display: inline-block;
        }

        #domov-nase-sluzby div {
            vertical-align: top;
        }

        #ABdev_main_slider {
            margin-top: 90px;
            max-height: calc(100vh - 90px);
        }

        #rev_slider_1_1_wrapper .slotholder:after {
            content: '';
            position: absolute;
            display: block;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 38, 93, 0.441);
        }
    </style>
@endsection
@section('content')
    <section id="ABdev_main_slider">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="home_slider" style="background-color:#E9E9E9;padding:0px;" domov>
            <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
            <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
                <ul> <!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="rs-plugin/assets/slider1-100x50.jpg" data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('/images/uploaded/' . $photos->find(1)->path) }}" alt="Projektovanie a realizácia led osvetlenia " title="Projektovanie a realizácia led osvetlenia " width="1942" height="1295"
                            data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="tp-caption largeboldwhite2   tp-resizeme" data-x="center" data-hoffset="-20" data-y="center" data-voffset="-70" data-width="auto" data-height="auto" data-transform_idle=""
                            data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00);" id="domov_slider_filter">
                        </div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption mediumlightwhite2   tp-resizeme" id="slide-1-layer-1" data-x="center" data-hoffset="0" data-y="295" data-width="auto" data-height="auto" data-transform_idle=""
                            data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00);">
                            {{ $texts->find(1)->title }}
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption largeboldwhite2   tp-resizeme" id="slide-1-layer-2" data-x="center" data-hoffset="-20" data-y="center" data-voffset="-70" data-width="auto" data-height="auto" data-transform_idle=""
                            data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 6; white-space: nowrap; color: rgba(255, 255, 255, 1.00);border-color:rgba(255, 255, 255, 1.00);">
                            {{ $texts->find(1)->content }}
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption small_light_white   tp-resizeme" id="slide-1-layer-3" data-x="center" data-hoffset="0" data-y="center" data-voffset="2" data-width="auto" data-height="auto" data-transform_idle=""
                            data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap;font-style:italic;border-color:rgba(255, 255, 255, 1.00);">
                            {{ $texts->find(1)->content_2 }}
                        </div>
                    </li>
                </ul>
                <div class="tp-static-layers"></div>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </section>

    <section id="domov-uvod" class="tcvpb_section_tc section_body_fullwidth section_no_column_margin section_equalize_5 section_with_header intro_text_after" domov style="padding-bottom: 50px; padding-top: 0;">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container sameHeight" id="domov-nase-sluzby">

                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_team_member ">
                        <a href="{{ $ctas->find(1)->button_link }}">
                            <div class="img_cont">
                                <img src="{{ asset('/images/uploaded/' . $photos->find(2)->path) }}" alt="Osvetlenie obchodných priestorov" title="Osvetlenie obchodných priestorov">
                            </div>
                            <div class="tcvpb_team_member_link makeSameHeight">
                                <span class="tcvpb_team_member_name">
                                    {{ $ctas->find(1)->button_text }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_team_member ">
                        <a href="{{ $ctas->find(2)->button_link }}">
                            <div class="img_cont">
                                <img src="{{ asset('/images/uploaded/' . $photos->find(3)->path) }}" alt="Osvetlenie priemyselných priestorov" title="Osvetlenie priemyselných priestorov">
                            </div>
                            <div class="tcvpb_team_member_link makeSameHeight">
                                <span class="tcvpb_team_member_name">
                                    {{ $ctas->find(2)->button_text }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_team_member ">
                        <a href="{{ $ctas->find(3)->button_link }}">
                            <div class="img_cont">
                                <img src="{{ asset('/images/uploaded/' . $photos->find(4)->path) }}" alt="Osvetlenie kancelárskych priestorov" title="Osvetlenie kancelárskych priestorov">
                            </div>
                            <div class="tcvpb_team_member_link makeSameHeight">
                                <span class="tcvpb_team_member_name">
                                    {{ $ctas->find(3)->button_text }}
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="single-portfolio-item" domov style="padding-top: 50px;">
        <div class="container">
            <div class="portfolio_single_column_item portfolio_item outdoors">
                <div class="portfolio_inner_content sameHeight">
                    <div class="portfolio_single_container clearfix">
                        <div class="portfolio_thumb hidden-xs">
                            <div class="overlayed makeSameHeight" shonmd>
                                <img width="1170" height="841" src="{{ asset('/images/uploaded/' . $photos->find(5)->path) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image makeSameHeight" shonmd
                                    alt="Od návrhu osvetlenia ža po jeho realizáciu " title="Od návrhu osvetlenia ža po jeho realizáciu ">
                            </div>
                        </div>
                        <div class="portfolio_item_meta makeSameHeight" shonmd>
                            <h2 class="portfolio_title">
                                {{ $texts->find(2)->title }}
                            </h2>
                            <div class="portfolio_item_meta_category">{{ $texts->find(2)->content }}</div>
                            <p>
                                {{ $texts->find(13)->title }}
                            </p>
                            <p>
                                {{ $texts->find(13)->content }}
                            </p>
                            <p>
                                {{ $texts->find(13)->content_2 }}
                            </p>

                            <div class="post-readmore portfolio-readmore">
                                <a href="{{ $ctas->find(4)->button_link }}" class="more-link button-2" style="margin-right: 10px;">{{ $ctas->find(4)->button_text }}</a>
                                <a href="{{ $ctas->find(5)->button_link }}" class="more-link button-2">{{ $ctas->find(5)->button_text }}</a>
                            </div>
                        </div>
                        <div class="portfolio_thumb visible-xs">
                            <div class="overlayed makeSameHeight" shonmd>
                                <img width="1170" height="841" src="{{ asset('/images/uploaded/' . $photos->find(5)->path) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image makeSameHeight" shonmd
                                    alt="Od návrhu osvetlenia ža po jeho realizáciu " title="Od návrhu osvetlenia ža po jeho realizáciu ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tcvpb_section_tc tcvpb-centered tcvpb-inversed_text pattern_overlayed section_no_column_margin section_equalize_5 section_with_header intro_text_after inspirado_parallax_image2" data-parallax="0" domov id="preco-my"
        style="background-attachment: fixed; background-image: url({{ asset('/images/uploaded/' . $photos->find(6)->path) }})">
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{ $texts->find(3)->title }}
                </h3>
                <p>
                    {{ $texts->find(3)->content }}
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span2">
                    <div class="tcvpb_service_box tcvpb_service_box_big_rounded ">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll crcl">
                                <img src="{{ asset('/images/ikonky/hp_spracovanie_dokumentacie.png') }}" alt="SPRACOVANIE DOKUMENTÁCIE" title="SPRACOVANIE DOKUMENTÁCIE">
                            </div>
                            <h3>
                                {{ $texts->find(4)->title }}
                            </h3>
                            <p>
                                {{ $texts->find(4)->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span3">
                    <div class="tcvpb_service_box tcvpb_service_box_big_rounded border_radius_5">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <i class="ci_icon-chat icon_color transparent_background"></i>
                            </div>
                            <h3>
                                {{ $texts->find(5)->title }}
                            </h3>
                            <p>
                                {{ $texts->find(5)->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span3">
                    <div class="tcvpb_service_box tcvpb_service_box_big_rounded border_radius_5">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll crcl">
                                <img src="{{ asset('/images/ikonky/hp_na_mieru.png') }}" alt="NA MIERU" title="NA MIERU">
                            </div>
                            <h3>
                                {{ $texts->find(6)->title }}
                            </h3>
                            <p>
                                {{ $texts->find(6)->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span2">
                    <div class="tcvpb_service_box tcvpb_service_box_big_rounded border_radius_5">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll crcl">
                                <img src="{{ asset('/images/ikonky/hp_vyhodne_financovanie.png') }}" alt="VÝHODNÉ FINANCOVANIE" title="VÝHODNÉ FINANCOVANIE">
                            </div>
                            <h3>
                                {{ $texts->find(7)->title }}
                            </h3>
                            <p>
                                {{ $texts->find(7)->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span2">
                    <div class="tcvpb_service_box tcvpb_service_box_big_rounded border_radius_5">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll crcl">
                                <img src="{{ asset('/images/ikonky/hp_montaz_vratane_elektroinstalacie.png') }}" alt="MONTÁŽ VRÁTANE ELEKTROINŠTALÁCIE" title="MONTÁŽ VRÁTANE ELEKTROINŠTALÁCIE">
                            </div>
                            <h3>
                                {{ $texts->find(8)->title }}
                            </h3>
                            <p>
                                {{ $texts->find(8)->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="domov-cta" class="tcvpb_section_tc no_padding" domov>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="tcvpb-callout_box tcvpb-callout_box_style_2 black_text">
                        <span class="tcvpb-callout_box_title">{{ $ctas->find(6)->title }}</span>
                        <p class="p_tc">
                            {{ $ctas->find(6)->subtitle }}
                        </p>
                        <a href="{{ $ctas->find(6)->button_link }}" target="_self" class="button-style-1 button-2">{{ $ctas->find(6)->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tcvpb_section_tc section_with_header background_color_dark_blue" domov id="usetrili_s_nami">
        <header>
            <div class="tcvpb_container">
                <h3 class="color-white">
                    {{ $texts->find(9)->title }}
                </h3>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="tcvpb-carousel " data-autoplay="1" data-items="1" data-effect="scroll" data-easing="linear" data-duration="800">
                        <ul class="clearfix">
                            @include('frontend._sponsors')
                        </ul>
                        <div class="carousel_navigation ">
                            <a href="javascript:void(0)" class="carousel_prev">
                                <i class="s7-angle-left"></i>
                            </a>
                            <a href="javascript:void(0)" class="carousel_next">
                                <i class="s7-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="referencie-title" class="tcvpb_section_tc tcvpb-centered section_with_header intro_text_after no_padding_bottom" domov>
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{ $texts->find(10)->title }}
                </h3>
                <p style="position: relative; padding-bottom: 35px">
                    {{ $texts->find(10)->content }}
                </p>
            </div>
        </header>
    </section>

    <section class="tcvpb_section_tc section_body_fullwidth section_with_header intro_text_after" id="konkretna-referencia-dalsie-referencie" style="padding-top: 0">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="ABdev_latest_portfolio clearfix" style="max-width: 1500px; margin: auto">
                        @foreach (\App\Referencia::all()->take(3) as $ref)
                            <div class="portfolio_front portfolio_item portfolio_item_3">
                                <div class="overlayed">
                                    <img src="/images/uploaded/{{ $ref->gallery_path }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="{{ $ref->perex }}" alt="{{ $ref->perex }}" />
                                    <div class="overlay text-center">
                                        <div>
                                            <p class="overlay_title">{{ $ref->name }}</p>
                                            <p class="portfolio_item_tags" style="max-width: 90%; margin: auto">
                                                {{ $ref->perex }}
                                            </p>
                                            <div class="portfolio_icons_container">
                                                <a class="portfolio_icon" href="{{ $ref->getURL() }}">
                                                    <i class="ci_icon-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="more_portfolio_link">
                        <a href="{{ route('referencie') }}" class="button-style-1 button-2">Všetky referencie</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
    <script>
        /*
            (function($) {
                $('#domov-nase-sluzby').owlCarousel({
                    items: 3,
                    nav: true,
                    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]

                });
            })(jQuery);*/
    </script>
@endsection
