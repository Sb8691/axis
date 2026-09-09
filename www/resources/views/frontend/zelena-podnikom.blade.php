@extends('frontend._layout')
@section('title', 'Úspory v osvetlení')
@section('meta_description', 'Projekt energeticky úsporného riešenia Vám navrhneme vždy optimálne, aby výška dosiahnutej úspory pokryla splátku investície.')
@section('styles')
<style>
    .tcvpb_service_box:has(.bullet) {
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .bullet p {
        font-size: 16px;
    }

    .padding_top_0 {
        padding-top: 0 !important;
    }

    .padding_bottom_0 {
        padding-bottom: 0 !important;
    }

    .section-services h2 {
        margin-bottom: 45px;        
    }

    .flipper .front {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .flipper .front .tcvpb_metro_box_header {
        margin-top: 0 !important;
    }

    .p_tc.left_aligned {
        font-size: 18px;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .reverse-mobile {
          display: flex !important;
          flex-direction: column-reverse !important;
        }
    }

    @media (max-width: 979px) {
        #headline_breadcrumbs_bar {
            background-size: 100% !important;
            background-position-y: 82px !important;
            background-repeat: no-repeat;
        }
    
    }
    
    @media (min-width: 500px) and (max-width: 600px) {
        #headline_breadcrumbs_bar {
            background-size: 100% !important;
            background-position-y: 50px !important;
            background-repeat: no-repeat;
        }
    }

    @media (min-width: 600px) and (max-width: 670px) {
        #headline_breadcrumbs_bar {
            background-size: 100% !important;
            background-position-y: 10px !important;
            background-repeat: no-repeat;
        }
    }

    @media (min-width: 670px) and (max-width: 800px) {
        #headline_breadcrumbs_bar {
            background-size: 100% !important;
            background-position-y: -70px !important;
            background-repeat: no-repeat;
        }
    }

    @media (min-width: 800px) and (max-width: 979px) {
        #headline_breadcrumbs_bar {
            background-size: 100% !important;
            background-position-y: -70px !important;
            background-repeat: no-repeat;
        }
    }

    @media (max-width: 768px) {
        .padding_bottom_mobile_15 {
            padding-bottom: 15px !important;
        }
    }
</style>
@endsection
@section('content')
    <section id="headline_breadcrumbs_bar" class="" style="background-image: url({{ asset('/images/uploaded/' . $photos->find(37)->path) }}); padding: 200px 0; background-position: center; background-size: cover;" led_osvetlenie></section>
    <section class="tcvpb_section_tc padding_top_70 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span">
                    {{-- <h3 class=" title_with_after">
                        Zelená podnikom
                    </h3> --}}
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(53)->content !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="tcvpb_section_tc section_no_column_margin section_with_header section_bg" led_osvetlenie>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <h2 class="title_with_after" style="margin-bottom: 50px">
                        {{ $texts->find(70)->title }}
                    </h2>
                </div>

                <div class="tcvpb_column_tc_span6">
                    <div class="tcvpb_metro_box ">
                        <div class="flipper">
                            <div class="front white_background">
                                <div class="tcvpb_metro_box_header">
                                    <div class="tcvpb_icon_boxed">
                                        <i class="s7-light icon_color transparent_background"></i>
                                    </div>
                                    <h3>
                                        {{ $texts->find(71)->title }}
                                    </h3>
                                </div>
                                {{-- <div>
                                    <p>{{ $texts->find(71)->content }}</p>
                                </div> --}}
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(71)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(71)->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <div class="tcvpb_metro_box ">
                        <div class="flipper">
                            <div class="front white_background">
                                <div class="tcvpb_metro_box_header">
                                    <div class="tcvpb_icon_boxed">
                                        <i class="s7-light icon_color transparent_background"></i>
                                    </div>
                                    <h3>
                                        {{ $texts->find(72)->title }}
                                    </h3>
                                </div>
                                {{-- <div>
                                    <p>{{ $texts->find(72)->content }}</p>
                                </div> --}}
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(72)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(72)->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <div class="tcvpb_metro_box ">
                        <div class="flipper">
                            <div class="front white_background">
                                <div class="tcvpb_metro_box_header">
                                    <div class="tcvpb_icon_boxed">
                                        <i class="s7-light icon_color transparent_background"></i>
                                    </div>
                                    <h3>
                                        {{ $texts->find(73)->title }}
                                    </h3>
                                </div>
                                {{-- <div>
                                    <p>{{ $texts->find(73)->content }}</p>
                                </div> --}}
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(73)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(73)->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <div class="tcvpb_metro_box ">
                        <div class="flipper">
                            <div class="front white_background">
                                <div class="tcvpb_metro_box_header">
                                    <div class="tcvpb_icon_boxed">
                                        <i class="s7-light icon_color transparent_background"></i>
                                    </div>
                                    <h3>
                                        {{ $texts->find(74)->title }}
                                    </h3>
                                </div>
                                {{-- <div>
                                    <p>{{ $texts->find(74)->content }}</p>
                                </div> --}}
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(74)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(74)->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_70 padding_bottom_0">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span">
                    {{-- <h3 class=" title_with_after">
                        Zelená podnikom
                    </h3> --}}
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(54)->content !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="tcvpb_section_tc section-services padding_bottom_0 section_with_header intro_text_after sameHeight" o_nas id="o-nas-prinasame-vam">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <h2 class="title_with_after">
                        {{ $texts->find(58)->title }}
                    </h2>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="1">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/projektovanie.svg') }}" alt="" title="">
                            </div>
                            {{-- <h3>
                                {{ $texts->find(55)->title }}
                            </h3> --}}
                        </div>
                        <div class="tcvpb_service_content bullet">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(55)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/instalacia.svg') }}" alt="" title="">
                            </div>
                            {{-- <h3>
                                {{ $texts->find(56)->title }}
                            </h3> --}}
                        </div>
                        <div class="tcvpb_service_content bullet">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(56)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="3">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/monitoring.svg') }}" alt="" title="">
                            </div>
                            {{-- <h3>
                                {{ $texts->find(57)->title }}
                            </h3> --}}
                        </div>
                        <div class="tcvpb_service_content bullet">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(57)->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_70" style="padding-bottom: 30px !important">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">

                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2>
                        {{ $texts->find(65)->title }}
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_0 padding_bottom_70 padding_bottom_mobile_15">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">

                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2 class=" title_with_after">
                        {{ $texts->find(66)->title }}
                    </h2>
                    <div class="">
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(66)->content }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6 tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_20"></span>
                    <div class="tcvpb-image ">
                        <img src="{{ asset('/images/uploaded/' . $photos->find(33)->path) }}" alt="Fotografia" title="Fotografia" style="height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_0 padding_bottom_70 padding_bottom_mobile_15">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container reverse-mobile">
                <div class="tcvpb_column_tc_span6 tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_20"></span>
                    <div class="tcvpb-image ">
                        <img src="{{ asset('/images/uploaded/' . $photos->find(34)->path) }}" alt="Fotografia" title="Fotografia" style="height: 300px;">
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2 class=" title_with_after">
                        {{ $texts->find(67)->title }}
                    </h2>
                    <div class="">
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(67)->content }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_0 padding_bottom_70 padding_bottom_mobile_15">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">

                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2 class=" title_with_after">
                        {{ $texts->find(68)->title }}
                    </h2>
                    <div class="">
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(68)->content }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6 tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_20"></span>
                    <div class="tcvpb-image ">
                        <img src="{{ asset('/images/uploaded/' . $photos->find(35)->path) }}" alt="Fotografia" title="Fotografia" style="height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_0 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container reverse-mobile">
                <div class="tcvpb_column_tc_span6 tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_20"></span>
                    <div class="tcvpb-image ">
                        <img src="{{ asset('/images/uploaded/' . $photos->find(36)->path) }}" alt="Fotografia" title="Fotografia" style="height: 300px;">
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2 class=" title_with_after">
                        {{ $texts->find(69)->title }}
                    </h2>
                    <div class="">
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(69)->content }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_70 section-services section_with_header intro_text_after sameHeight" o_nas id="o-nas-prinasame-vam">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <h2 class="title_with_after">
                        {{ $texts->find(59)->title }}
                    </h2>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="1">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/sun.svg') }}" alt="" title="">
                            </div>
                            {{-- <h3>
                                {{ $texts->find(60)->title }}
                            </h3> --}}
                        </div>
                        <div class="tcvpb_service_content bullet">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(60)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="2">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/euro.svg') }}" alt="" title="">
                            </div>
                            {{-- <h3>
                                {{ $texts->find(61)->title }}
                            </h3> --}}
                        </div>
                        <div class="tcvpb_service_content bullet">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(61)->content }}
                            </p>
                        </div>
                    </div>
                    <div class="tcvpb_service_box tcvpb_service_box_icon_aside_left border_radius_5 makeSameHeight" shonlg shonmd shindex="3">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed scroll ">
                                <img src="{{ asset('/images/ikonky/eco.svg') }}" alt="" title="">
                            </div>
                            {{-- <h3>
                                {{ $texts->find(62)->title }}
                            </h3> --}}
                        </div>
                        <div class="tcvpb_service_content bullet">
                            <p class="p_tc left_aligned">
                                {{ $texts->find(62)->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_0 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span">
                    <h3 class=" title_with_after">
                        {!! $texts->find(63)->title !!}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(63)->content !!}
                        </div>
                    </div>
                    <h4 style="font-size: 16px; margin-top: 0.3rem">
                        {!! $texts->find(63)->content_2 !!}
                    </h4>
                </div>
            </div>
    </section>
    {{-- <section id="headline_breadcrumbs_bar" class="" style="background-image: url({{ asset('/images/uploaded/' . $photos->find(18)->path) }}); padding: 200px 0; background-position: center;">
    </section> --}}
@endsection
@section('scripts')
@endsection
