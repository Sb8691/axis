@extends('frontend._layout')
@section('title', 'LED osvetlenie')
@section('meta_description', 'Nie je možné použiť štandardné osvetlenie? Nevadí. Vyrobíme vám osvetlenie ušité na mieru. Atypické osvetlenie môže Vášmu priestoru dodať…')
@section('styles')
<style>
    .centered-img {
        margin-top: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .centered-img img {
        width: 100%;
    }
</style>
@endsection
@section('content')
    <section id="headline_breadcrumbs_bar" class="" style="background-image: url({{ asset('/images/uploaded/' . $photos->find(27)->path) }}); padding: 200px 0; background-position: center; background-size: cover;" led_osvetlenie></section>
    <section class="tcvpb_section_tc padding_top_70 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span">
                    <h3 class=" title_with_after">
                        {{ $texts->find(46)->title }}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(46)->content !!}
                        </div>
                    </div>

                    <div class="centered-img">
                        <img style="max-width: 550px" src="{{ asset('/images/uploaded/' . $photos->find(32)->path) }}">
                    </div>
                </div>
            </div>
    </section>
    <section class="tcvpb_section_tc section_no_column_margin section_with_header section_bg" id="o-nas-osvetlenie-uvod" led_osvetlenie>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span6">
                    <div class="tcvpb_metro_box ">
                        <div class="flipper">
                            <div class="front white_background">
                                <div class="tcvpb_metro_box_header">
                                    <div class="tcvpb_icon_boxed">
                                        <i class="s7-light icon_color transparent_background"></i>
                                    </div>
                                    <h3>
                                        {{ $texts->find(15)->title }}
                                    </h3>
                                </div>
                                <div>
                                    <p>{{ $texts->find(15)->content }}</p>
                                </div>
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(15)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(15)->content_2 }}
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
                                        {{ $texts->find(16)->title }}
                                    </h3>
                                </div>
                                <div>
                                    <p>{{ $texts->find(16)->content }}</p>
                                </div>
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(16)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(16)->content_2 }}
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
                                        {{ $texts->find(17)->title }}
                                    </h3>
                                </div>
                                <div>
                                    <p>{{ $texts->find(17)->content }}</p>
                                </div>
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(17)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(17)->content_2 }}
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
                                        {{ $texts->find(18)->title }}
                                    </h3>
                                </div>
                                <div>
                                    <p>{{ $texts->find(18)->content }}</p>
                                </div>
                            </div>
                            <div class="back blue_box_background">
                                <h3>
                                    {{ $texts->find(18)->title }}
                                </h3>
                                <p class="p_tc">
                                    {{ $texts->find(18)->content_2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_70 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span6">
                    <h3 class=" title_with_after">
                        {{ $texts->find(47)->title }}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(47)->content !!}
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <h3 class=" title_with_after">
                        {{ $texts->find(48)->title }}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(48)->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_bottom_70" style="padding:0px">
        <div class="tcvpb_section_content">

            <div class="tcvpb_column_tc_span tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                <span class="clear spacer_20"></span>
                <div class="tcvpb-image ">
                    <img src="{{ asset('/images/uploaded/' . $photos->find(28)->path) }}" alt="Fotografia" title="Fotografia" style="height: 300px;">
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_70 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span6 tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_20"></span>
                    <div class="tcvpb-image ">
                        <img src="{{ asset('/images/uploaded/' . $photos->find(29)->path) }}" alt="Fotografia" title="Fotografia" style="height: 300px;">
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2 class=" title_with_after">
                        {{ $texts->find(49)->title }}
                    </h2>
                    <div class="">
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(49)->content }}
                            </span>
                        </p>
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(49)->content_2 }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tcvpb_section_tc padding_top_70 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">

                <div class="tcvpb_column_tc_span6">
                    <span class="clear spacer_20"></span>
                    <h2 class=" title_with_after">
                        {{ $texts->find(50)->title }}
                    </h2>
                    <div class="">
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(50)->content }}
                            </span>
                        </p>
                        <p class="p_tc left_aligned">
                            <span class="">
                                {{ $texts->find(50)->content_2 }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span6 tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                    <span class="clear spacer_20"></span>
                    <div class="tcvpb-image ">
                        <img src="{{ asset('/images/uploaded/' . $photos->find(30)->path) }}" alt="Fotografia" title="Fotografia" style="height: 300px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc padding_top_70 padding_bottom_70">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span">
                    <h3 class=" title_with_after">
                        {{ $texts->find(51)->title }}
                    </h3>
                    <div class="">
                        <div class="unformat">
                            {!! $texts->find(51)->content !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="tcvpb_section_tc padding_bottom_70" style="padding:0px">
        <div class="tcvpb_section_content">

            <div class="tcvpb_column_tc_span tcvpb-centered tcvpb-animo" data-animation="fadeInDown" data-trigger_pt="0" data-duration="1000" data-delay="300">
                <span class="clear spacer_20"></span>
                <div class="tcvpb-image ">
                    <img style="max-height: 300px; object-fit: contain" src="{{ asset('/images/uploaded/' . $photos->find(31)->path) }}" alt="Fotografia" title="Fotografia">
                </div>
            </div>
        </div>
    </section>
@endsection
