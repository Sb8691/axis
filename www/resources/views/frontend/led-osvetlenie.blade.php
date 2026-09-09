@extends('frontend._layout')
@section('title', 'LED osvetlenie')
@section('meta_description', 'Nie je možné použiť štandardné osvetlenie? Nevadí. Vyrobíme vám osvetlenie ušité na mieru. Atypické osvetlenie môže Vášmu priestoru dodať…')
@section('styles')
@endsection
@section('content')
    <section id="headline_breadcrumbs_bar" class="" style="background-image: url({{ asset('/images/uploaded/' . $photos->find(10)->path) }}); padding: 200px 0; background-position: center;" led_osvetlenie></section>
    {{-- <section class="tcvpb_section_tc" o_nas led_osvetlenie id="axis_pos_systems">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container sameHeight">
                <div class="tcvpb_column_tc_span6 obj-ft makeSameHeight" shonmd>
                    <img src="{{asset('/images/uploaded/' . $photos->find(11)->path)}}" alt="LED osvetlenie reštaurácie " title="LED osvetlenie reštaurácie " class="makeSameHeight" shonmd>
                </div>
                <div class="tcvpb_column_tc_span6 makeSameHeight">
                    <h3 class="column_title_text_margin title_with_after">
                        {{$texts->find(29)->title}}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(29)->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="tcvpb_section_tc section_with_header intro_text_after sameHeight" o_nas id="o-nas-prinasame-vam">
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{ $texts->find(20)->title }}
                </h3>
                <p>
                    {{ $texts->find(20)->content }}
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="1">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/onas_poradenstvo_a_konzultacie.png') }}" alt="Poradenstvo a konzultácie" title="Poradenstvo a konzultácie">
                            </div>
                            <h3>
                                {{ $texts->find(21)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(21)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/o_nas_vyhodne_financovanie_led_svetiel.png') }}" alt="Výhodné financovanie LED svietidiel" title="Výhodné financovanie LED svietidiel">
                            </div>
                            <h3>
                                {{ $texts->find(22)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(22)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="3">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/onas_led_riesenia_site_na_mieru.png') }}" alt="Led riešenia „šité na mieru“" title="Led riešenia „šité na mieru“">
                            </div>
                            <h3>
                                {{ $texts->find(23)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(23)->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="1">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/o_nas_spracovanie_technickej_dokumentacie.png') }}" alt="Spracovanie technickej dokumentácie" title="Spracovanie technickej dokumentácie">
                            </div>
                            <h3>
                                {{ $texts->find(24)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(24)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/onas_svetelno_technicke_vypocty.png') }}" alt="Svetelno - technické výpočty" title="Svetelno - technické výpočty">
                            </div>
                            <h3>
                                {{ $texts->find(25)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(25)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="3">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/onas_vypracovanie_reviznych_sprav.png') }}" alt="Vypracovanie revíznych správ" title="Vypracovanie revíznych správ">
                            </div>
                            <h3>
                                {{ $texts->find(26)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(26)->content }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="1">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/onas_3d_vizualizacie_osvetlenia.png') }}" alt="3D vizualizácia osvetlenia" title="3D vizualizácia osvetlenia">
                            </div>
                            <h3>
                                {{ $texts->find(27)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(27)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/o_nas_instalacia.png') }}" alt="Inštalácia svietidiel a elektroinštalácie" title="Inštalácia svietidiel a elektroinštalácie">
                            </div>
                            <h3>
                                {{ $texts->find(28)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(28)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/o_nas_spracovanie_technickej_dokumentacie.png') }}" alt="Záručný a pozáručný servis" title="Záručný a pozáručný servis">
                            </div>
                            <h3>
                                {{ $texts->find(52)->title }}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(52)->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="uspory-v-osvetleni-pripadove-studie" class="tcvpb_section_tc section_body_fullwidth section_with_header intro_text_after section_bg">
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{ $texts->find(33)->title }}
                </h3>
                <p>
                    {{ $texts->find(33)->content }}
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="ABdev_latest_portfolio" style="max-width: 1600px; margin: auto">
                        <div class="portfolio_front portfolio_item portfolio_item_3 nature">
                            <div class="overlayed">
                                <img src="{{ asset('/images/uploaded/' . $photos->find(20)->path) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlení pre výrobné haly"
                                    alt="Úspora v osvetlení pre výrobné haly">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{ $ctas->find(12)->button_link }}" style="color: inherit">{{ $ctas->find(12)->button_text }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_front portfolio_item portfolio_item_3 nature">
                            <div class="overlayed">
                                <img src="{{ asset('/images/uploaded/' . $photos->find(21)->path) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlení pre skladové priestory"
                                    alt="Úspora v osvetlení pre skladové priestory">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{ $ctas->find(13)->button_link }}" style="color: inherit">{{ $ctas->find(13)->button_text }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_front portfolio_item portfolio_item_3 nature">
                            <div class="overlayed">
                                <img src="{{ asset('/images/uploaded/' . $photos->find(22)->path) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlení pre hydinárske farmy"
                                    alt="Úspora v osvetlení pre hydinárske farmy">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{ $ctas->find(14)->button_link }}" style="color: inherit">{{ $ctas->find(14)->button_text }}</a></p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="portfolio_front portfolio_item portfolio_item_4 nature">
                            <div class="overlayed">
                                <img src="{{ asset('/images/uploaded/' . $photos->find(23)->path) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="Úspora v osvetlenie pre obchodné priestory"
                                    alt="Úspora v osvetlenie pre obchodné priestory">
                                <div class="overlay">
                                    <p class="overlay_title"><a href="{{ $ctas->find(15)->button_link }}" style="color: inherit">{{ $ctas->find(15)->button_text }}</a></p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc tcvpb-centered tcvpb-inversed_text pattern_overlayed " style="background-image: url({{ asset('/images/uploaded/' . $photos->find(24)->path) }}); position: relative!important;" data-parallax="0"
        id="uspory-v-osvetleni-cta">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <span class="clear spacer_110"></span>
                    <div class="">
                        <p class="p_tc">
                            <span class="parallax_font_36">{{ $texts->find(34)->title }}</span>
                        </p>
                    </div>
                    <div class="">
                        <p>
                            <span class="parallax_font_14"><em>
                                    {{ $texts->find(34)->content }}
                                </em></span>
                        </p>
                    </div>
                    <span class="clear spacer_30"></span>
                    <a href="{{ $ctas->find(9)->button_link }}" class="button-1 tcvpb-button tcvpb-button_transparent tcvpb-button_medium margin_right_20">{{ $ctas->find(9)->button_text }}</a>
                    <a href="{{ $ctas->find(10)->button_link }}" class="button-1 tcvpb-button tcvpb-button_transparent tcvpb-button_medium ">{{ $ctas->find(10)->button_text }}</a>
                    <span class="clear spacer_113"></span>
                </div>
            </div>
        </div>
    </section>
    <section id="uspory-v-osvetleni-partneri" class="tcvpb_section_tc section_with_header background_color_dark_blue"
        style="background: url(/images/21_01/uspory_v_osvetleni_nad_kontaktnym_formularom.jpg) no-repeat center/cover fixed; padding: 50px 0;">
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

    {{-- <section id="related_portfolio" style="margin-bottom: 0; padding-bottom: 100px;" led_osvetlenie>
        <div class="container mt-50">
            <h3 class="column_title_center">
                {{$texts->find(30)->title}}
            </h3>
            <div class="tcvpb_column_tc_span12 ">
                <div class="portfolio_container row owl-carousel" id="poskytujeme-led-osvetlenie-pre-owl">
                    <div class="portfolio_1_column">
                        <div class="portfolio_inner_content">
                            <a href="{{$ctas->find(16)->button_link}}">
                                <img src="{{asset('/images/uploaded/' . $photos->find(12)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="LED osvetlenie pre obchodné priestory" alt="LED osvetlenie pre obchodné priestory">
                            </a>
                            <div class="portfolio_item_meta">
                                <h6 class="column_title_center">
                                    <a href="{{$ctas->find(16)->button_link}}">{{$ctas->find(16)->button_text}}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_1_column">
                        <div class="portfolio_inner_content">
                            <a href="{{$ctas->find(17)->button_link}}">
                                <img src="{{asset('/images/uploaded/' . $photos->find(13)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="LED osvetlenie pre skladové priestory" alt="LED osvetlenie pre skladové priestory">
                            </a>
                            <div class="portfolio_item_meta">
                                <h6 class="column_title_center">
                                    <a href="{{$ctas->find(17)->button_link}}">{{$ctas->find(17)->button_text}}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_1_column">
                        <div class="portfolio_inner_content">
                            <a href="{{$ctas->find(18)->button_link}}">
                                <img src="{{asset('/images/uploaded/' . $photos->find(14)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="LED osvetlenie pre výrobné haly" alt="LED osvetlenie pre výrobné haly">
                            </a>
                            <div class="portfolio_item_meta">
                                <h6 class="column_title_center">
                                    <a href="{{$ctas->find(18)->button_link}}">{{$ctas->find(18)->button_text}}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_1_column">
                        <div class="portfolio_inner_content">
                            <a href="{{$ctas->find(19)->button_link}}">
                                <img src="{{asset('/images/uploaded/' . $photos->find(15)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="LED osvetlenie pre športové haly" alt="LED osvetlenie pre športové haly">
                            </a>
                            <div class="portfolio_item_meta">
                                <h6 class="column_title_center">
                                    <a href="{{$ctas->find(19)->button_link}}">{{$ctas->find(19)->button_text}}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_1_column">
                        <div class="portfolio_inner_content">
                            <a href="{{$ctas->find(20)->button_link}}">
                                <img src="{{asset('/images/uploaded/' . $photos->find(16)->path)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="LED osvetlenie pre hydinárske farmy" alt="LED osvetlenie pre hydinárske farmy">
                            </a>
                            <div class="portfolio_item_meta">
                                <h6 class="column_title_center">
                                    <a href="{{$ctas->find(20)->button_link}}">{{$ctas->find(20)->button_text}}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section id="led-osvetlenie-vyrobime-vam-osvetlenie" class="tcvpb_section_tc padding_top_70 padding_bottom_70" led_osvetlenie>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span6 tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_20"></span>
                    <div class="tcvpb-image ">
                        <img src="{{ asset('/images/uploaded/' . $photos->find(17)->path) }}" alt="LED žiarovky" title="LED žiarovky" style="height: 190px">
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2 class=" title_with_after">
                        {{ $texts->find(31)->title }}
                    </h2>
                    <div class="">
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(31)->content }}
                            </span>
                        </p>
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(31)->content_2 }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="tcvpb_section_tc no_padding_top_and_bottom blue_box_background cta" led_osvetlenie>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="tcvpb-callout_box tcvpb-callout_box_style_4 white_text">
                        <span class="tcvpb-callout_box_title">{{ $ctas->find(8)->title }}</span>
                        <a href="{{ $ctas->find(8)->button_link }}" target="_self" class="tcvpb-button1 tcvpb-button_rounded tcvpb-button_small tcvpb-button_transparent button-1">{{ $ctas->find(8)->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
@section('scripts')
    <script>
        (function($) {
            $('#poskytujeme-led-osvetlenie-pre-owl').owlCarousel({
                items: 3,
                margin: 50,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsive: {
                    992: {
                        items: 3
                    },
                    560: {
                        items: 2,
                        margin: 15
                    },
                    0: {
                        items: 1,
                        margin: 25
                    }
                }
            })
        })(jQuery);
    </script>
@endsection
