@extends('frontend._layout')
@section('title', 'Konkrétna referencia')
@section('meta_description', '')
@section('styles')
@endsection
@section('content')
    <section id="simple_item_portfolio" class="mt-50" konkretna-referencia>
        <div class="media_container">
            <img src="http://placehold.it/1170x420" class="portfolio_item_image wp-post-image">
        </div>
        <div class="container portfolio_content">
            <div class="row">
                <div class="span9">
                    <h2 class="single_portfolio_heading">
                        NÁZOV PROJEKTU
                    </h2>
                    <div class="portfolio_single_description">
                        <p style="max-width: 600px">
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                        </p>
                    </div>
                </div>
                <div class="span3 portfolio_item_meta">
                    <h2 class="single_portfolio_heading">
                        Detaily projektu
                    </h2>
                    <p class="portfolio_single_detail">
                        <span class="portfolio_item_meta_label">Parameter:</span>
                        <span class="portfolio_item_meta_data">Lorem ipsum</span>
                    </p>
                    <p class="portfolio_single_detail">
                        <span class="portfolio_item_meta_label">Parameter:</span>
                        <span class="portfolio_item_meta_data">Lorem ipsum</span>
                    </p>
                    <p class="portfolio_single_detail">
                        <span class="portfolio_item_meta_label">Parameter:</span>
                        <span class="portfolio_item_meta_data">Lorem ipsum</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc section_body_fullwidth section_with_header intro_text_after" id="konkretna-referencia-dalsie-referencie" konkretna-referencia>
        <header>
            <div class="tcvpb_container">
                <h3>ĎALŠIE REFERENCIE</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.
                </p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="ABdev_latest_portfolio clearfix">
                        <div class="portfolio_front portfolio_item portfolio_item_3">
                            <div class="overlayed">
                                <img src="/images/600x400.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                                <div class="overlay">
                                    <p class="overlay_title">Názov referencie</p>
                                    <p class="portfolio_item_tags">
                                        Lorem ipsum dolor
                                    </p>
                                    <div class="portfolio_icons_container">
                                        <a class="portfolio_icon" data-lightbox="portfolio" data-title="Názov referencie" href="images/600x400.jpg">
                                            <i class="ci_icon-look"></i>
                                        </a>
                                        <a class="portfolio_icon" href="{{route('konkretna-referencia')}}">
                                            <i class="ci_icon-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_front portfolio_item portfolio_item_3">
                            <div class="overlayed">
                                <img src="/images/600x400.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                                <div class="overlay">
                                    <p class="overlay_title">Názov referencie</p>
                                    <p class="portfolio_item_tags">
                                        Lorem ipsum dolor
                                    </p>
                                    <div class="portfolio_icons_container">
                                        <a class="portfolio_icon" data-lightbox="portfolio" data-title="Názov referencie" href="images/600x400.jpg">
                                            <i class="ci_icon-look"></i>
                                        </a>
                                        <a class="portfolio_icon" href="{{route('konkretna-referencia')}}">
                                            <i class="ci_icon-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_front portfolio_item portfolio_item_3">
                            <div class="overlayed">
                                <img src="/images/600x400.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                                <div class="overlay">
                                    <p class="overlay_title">Názov referencie</p>
                                    <p class="portfolio_item_tags">
                                        Lorem ipsum dolor
                                    </p>
                                    <div class="portfolio_icons_container">
                                        <a class="portfolio_icon" data-lightbox="portfolio" data-title="Názov referencie" href="images/600x400.jpg">
                                            <i class="ci_icon-look"></i>
                                        </a>
                                        <a class="portfolio_icon" href="{{route('konkretna-referencia')}}">
                                            <i class="ci_icon-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more_portfolio_link">
                        <a href="{{route('referencie')}}">Všetky referencie</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection