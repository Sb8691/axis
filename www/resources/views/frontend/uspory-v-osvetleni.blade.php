@extends('frontend._layout')
@section('title', 'Úspory v osvetlení')
@section('meta_description', 'Projekt energeticky úsporného riešenia Vám navrhneme vždy optimálne, aby výška dosiahnutej úspory pokryla splátku investície.')
@section('styles')
    <style>
        .flipper > .front {
            position: relative;
        }
        .tcvpb_metro_box_header {
            margin-top: 0;
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%);
        }
    </style>
@endsection
@section('content')
    <section id="headline_breadcrumbs_bar" class="" style="background-image: url({{asset('/images/uploaded/' . $photos->find(18)->path)}}); padding: 200px 0; background-position: center;">
    </section>
    <section class="tcvpb_section_tc">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span6">
                    <h3 class=" title_with_after">
                        {{$texts->find(32)->title}}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(32)->content !!}
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6 tcvpb-animo" data-animation="fadeInRight" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_30"></span>
                    <div class="tcvpb-image ">
                        <img src="{{asset('/images/uploaded/' . $photos->find(19)->path)}}" alt="MINIMALIZUJTE ÚSPORY V OSVETLENÍ – Úsporné riešenie osvetlenia v kancelárii " title="MINIMALIZUJTE ÚSPORY V OSVETLENÍ – Úsporné riešenie osvetlenia v kancelárii ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="uspory-v-osvetleni-pripadove-studie" class="tcvpb_section_tc section_body_fullwidth section_with_header intro_text_after section_bg">
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{$texts->find(33)->title}}
                </h3>
                <p>
                    {{$texts->find(33)->content}}
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="ABdev_latest_portfolio" style="max-width: 1600px; margin: auto">
                        <div class="portfolio_front portfolio_item portfolio_item_4 nature">
                            <div class="overlayed">
                                <img src="{{asset('/images/uploaded/' . $photos->find(20)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlení pre výrobné haly" alt="Úspora v osvetlení pre výrobné haly">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{$ctas->find(12)->button_link}}" style="color: inherit">{{$ctas->find(12)->button_text}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_front portfolio_item portfolio_item_4 nature">
                            <div class="overlayed">
                                <img src="{{asset('/images/uploaded/' . $photos->find(21)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlení pre skladové priestory" alt="Úspora v osvetlení pre skladové priestory">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{$ctas->find(13)->button_link}}" style="color: inherit">{{$ctas->find(13)->button_text}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_front portfolio_item portfolio_item_4 nature">
                            <div class="overlayed">
                                <img src="{{asset('/images/uploaded/' . $photos->find(22)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlení pre hydinárske farmy" alt="Úspora v osvetlení pre hydinárske farmy">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{$ctas->find(14)->button_link}}" style="color: inherit">{{$ctas->find(14)->button_text}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_front portfolio_item portfolio_item_4 nature">
                            <div class="overlayed">
                                <img src="{{asset('/images/uploaded/' . $photos->find(23)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlenie pre obchodné priestory" alt="Úspora v osvetlenie pre obchodné priestory">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{$ctas->find(15)->button_link}}" style="color: inherit">{{$ctas->find(15)->button_text}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc tcvpb-centered tcvpb-inversed_text pattern_overlayed " style="background-image: url({{asset('/images/uploaded/' . $photos->find(24)->path)}}); position: relative!important;" data-parallax="0" id="uspory-v-osvetleni-cta">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <span class="clear spacer_110"></span>
                    <div class="">
                        <p class="p_tc">
                            <span class="parallax_font_36">{{$texts->find(34)->title}}</span>
                        </p>
                    </div>
                    <div class="">
                        <p>
                            <span class="parallax_font_14"><em>
                                    {{$texts->find(34)->content}}
                                </em></span>
                        </p>
                    </div>
                    <span class="clear spacer_30"></span>
                    <a href="{{$ctas->find(9)->button_link}}" class="button-1 tcvpb-button tcvpb-button_transparent tcvpb-button_medium margin_right_20">{{$ctas->find(9)->button_text}}</a>
                    <a href="{{$ctas->find(10)->button_link}}" class="button-1 tcvpb-button tcvpb-button_transparent tcvpb-button_medium ">{{$ctas->find(10)->button_text}}</a>
                    <span class="clear spacer_113"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc section_with_header intro_text_after sameHeight" uspory-v-osvetleni id="o-nas-vyhody-led-svetiel">
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{$texts->find(35)->title}}
                </h3>
                <p>
                    {{$texts->find(35)->content}}
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span6">
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="1">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{asset('/images/ikonky/uspory_v_osvetleni_nizka_spotreba_el_energie.png')}}" alt="Nízka spotreba elektrickej energie" title="Nízka spotreba elektrickej energie">
                            </div>
                            <h3>
                                {{$texts->find(36)->title}}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{$texts->find(36)->content}}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{asset('/images/ikonky/uspory_v_osvetleni_vysoka_odolnost.png')}}" alt="Vysoká odolnosť a dlhá životnosť" title="Vysoká odolnosť a dlhá životnosť">
                            </div>
                            <h3>
                                {{$texts->find(37)->title}}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{$texts->find(37)->content}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{asset('/images/ikonky/uspory_v_osvetleni_menej_vyvijaneho_tepla.png')}}" alt="Menej stratového tepla" title="Menej stratového tepla">
                            </div>
                            <h3>
                                {{$texts->find(38)->title}}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{$texts->find(38)->content}}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="1">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{asset('/images/ikonky/uspory_v_osvetleni_bez_ifracerveneho_ziarenia.png')}}" alt="Kvalita svetla" title="Kvalita svetla">
                            </div>
                            <h3>
                                {{$texts->find(39)->title}}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{$texts->find(39)->content}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="uspory-v-osvetleni-partneri" class="tcvpb_section_tc section_with_header background_color_dark_blue" style="background: url(/images/21_01/uspory_v_osvetleni_nad_kontaktnym_formularom.jpg) no-repeat center/cover fixed; padding: 50px 0;">
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
@endsection
@section('scripts')
@endsection