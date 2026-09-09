@extends('frontend._layout')
@section('title', 'O nás')
@section('meta_description', 'Realizujeme všetky inštaláčné a elektromontážne práce a poskytujeme záručný a pozáručný servis. Spolupracujeme s viacerými dodávateľmi, ktorí sa špecializujú…')
@section('styles')
@endsection
@section('content')
    <section id="headline_breadcrumbs_bar" style="background-image: url({{ asset('/images/uploaded/' . $photos->find(8)->path) }}); background-position: center; padding: 200px 0;" o_nas></section>
    <section class="tcvpb_section_tc section_no_column_margin section_with_header section_bg" id="o-nas-osvetlenie-uvod" led_osvetlenie>
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{ $texts->find(14)->title }}
                </h3>
                <p class="header-text">
                    {{ $texts->find(14)->content }}
                </p>
            </div>
        </header>
    </section>
    <section class="tcvpb_section_tc">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span6">
                    <h3 class=" title_with_after">
                        {{ $texts->find(44)->title }}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(44)->content !!}
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <h3 class=" title_with_after">
                        {{ $texts->find(45)->title }}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(45)->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc no_padding_top_and_bottom blue_box_background cta" o_nas>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12 tcvpb-centered">
                    <div class="tcvpb-callout_box tcvpb-callout_box_style_3 white_text">
                        <span class="tcvpb-callout_box_title">{{ $ctas->find(7)->title }}</span>
                        <a href="{{ $ctas->find(7)->button_link }}" target="_self" class="tcvpb-button1 tcvpb-button_normal tcvpb-button_small tcvpb-button_transparent smoothScroll">{{ $ctas->find(7)->button_text }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- <section class="tcvpb_section_tc section_with_header intro_text_after" style="background-image: url({{asset('/images/uploaded/' . $photos->find(9)->path)}}); background-position: center; background-attachment: fixed" o_nas id="o-nas-nasi-partneri">
        <header>
            <div class="tcvpb_container">
                <h3 class="color-white">
                    {{$texts->find(19)->title}}
                </h3>
                <p class="color-white">
                    {{$texts->find(19)->content}}
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span3">
                </div>
                <div class="tcvpb_column_tc_span3">
                    <div class="tcvpb_team_member ">
                        <div class="tcvpb_overlayed">
                            <img src="/images/logo1.png" alt="innogy logo" title="innogy logo" style="max-height: 170px; width: auto;">
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span3">
                    <div class="tcvpb_team_member ">
                        <div class="tcvpb_overlayed">
                            <img src="/images/logo2.png" alt="VSE logo" title="VSE logo" style="max-height: 180px; width: auto;">
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span3">
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="tcvpb_section_tc section_with_header intro_text_after sameHeight" o_nas id="o-nas-prinasame-vam">
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
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section class="tcvpb_section_tc section_with_header background_color_dark_blue" o_nas id="usetrili_s_nami">
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
    </section> --}}
@endsection
@section('scripts')
@endsection
