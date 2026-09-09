@extends('frontend._layout')
@section('title', 'Kontakt')
@section('meta_description', 'Ušetrite na energiách. Dohodnite si obhliadku vašich priestorov. Kontaktujte nás na čísle +421 948 465 331 alebo mailom na axisps@axis.sk.')
@section('styles')
@endsection
@section('content')
    <section id="headline_breadcrumbs_bar" class="" style="background-image: url({{asset('/images/uploaded/' . $photos->find(26)->path)}}); background-position: center; padding: 200px 0;"></section>
    <section class="tcvpb_section_tc section_with_header intro_text_after padding_top_90 padding_bottom_64" id="kontakt-wrapper">
        <header>
            <div class="tcvpb_container">
                <h3>
                    {{$texts->find(40)->title}}
                </h3>
                <p>
                    {{$texts->find(40)->content}}
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content sameHeight">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_service_box tcvpb_service_box_big service_box_border makeSameHeight">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed">
                                <i class="s7-call icon_color transparent_background"></i>
                            </div>
                            <h3>
                                {{$texts->find(41)->title}}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc">
                                <a href="tel:{{str_replace(' ', '', $texts->find(41)->content)}}">{{$texts->find(41)->content}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_service_box tcvpb_service_box_big service_box_border makeSameHeight">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed">
                                <i class="s7-mail-open-file icon_color transparent_background"></i>
                            </div>
                            <h3>
                                {{$texts->find(42)->title}}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc">
                                <a href="mailto:{{$texts->find(42)->content}}">{{$texts->find(42)->content}}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tcvpb_column_tc_span4">
                    <div class="tcvpb_service_box tcvpb_service_box_big service_box_border makeSameHeight">
                        <div class="tcvpb_service_box_header">
                            <div class="tcvpb_icon_boxed">
                                <i class="s7-home icon_color transparent_background"></i>
                            </div>
                            <h3>
                                {{$texts->find(43)->title}}
                            </h3>
                        </div>
                        <div class="tcvpb_service_content">
                            <p class="p_tc" style="color: #5F6163">
                                {{$texts->find(43)->content}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc section_body_fullwidth no_padding_top_and_bottom" style="margin-bottom: 50px" id="kontakt-mapa">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="tcvpb_google_map_wrapper">
                        <div style="background: url(/images/mapp.jpg) no-repeat center/cover" id="tcvpb_google_map_1" data-map_type="ROADMAP" data-auto_center_zoom="0" data-lat="48.122337" data-lng="17.092294" data-zoom="16" data-scrollwheel="0" data-maptypecontrol="1" data-pancontrol="1" data-zoomcontrol="1" data-scalecontrol="1" class="tcvpb_google_map google_map_style">
                            <span class="mp-overlay"><span>Načítať mapu</span></span>
                        </div>
                        <div class="tcvpb_google_map_marker" data-title="AXIS POS Systems s. r. o." data-icon="images/map-icon.png" data-lat="48.122337" data-lng="17.092294">
                            <h5>
                                Gogoľova 18 <br>851 05 Bratislava
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection