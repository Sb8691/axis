@extends('frontend._layout')
@section('title', $referencia->name)
@section('meta_description', $referencia->perex)
@section('styles')
@endsection
@section('content')
    <section id="simple_item_portfolio" class="mt-50" konkretna-referencia>
        <div class="media_container">
            <img src="/images/uploaded/{{$referencia->header_path}}" class="portfolio_item_image wp-post-image" alt="{{$referencia->perex}}" title="{{$referencia->perex}}">
        </div>
        <div class="container portfolio_content">
            <div class="row">
                <div class="span9">
                    <h2 class="single_portfolio_heading">
                        {{$referencia->name}}
                    </h2>
                    <div class="portfolio_single_description">
                        <div class="unformat" style="max-width: 600px">
                           {!! $referencia->content !!}
                        </div>
                    </div>
                </div>
                <div class="span3 portfolio_item_meta">
                    <h2 class="single_portfolio_heading">
                        Detaily projektu
                    </h2>
                    @foreach($referencia->parameters as $parameter)
                        <p class="portfolio_single_detail">
                            <span class="portfolio_item_meta_label">{{$parameter->name}}:</span>
                            <span class="portfolio_item_meta_data">{{$parameter->value}}</span>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc section_body_fullwidth section_with_header intro_text_after" id="konkretna-referencia-dalsie-referencie" konkretna-referencia>
        <header>
            <div class="tcvpb_container">
                <h3>ĎALŠIE REFERENCIE</h3>
                <p style="padding: 0"></p>
            </div>
        </header>
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="ABdev_latest_portfolio clearfix" style="max-width: 1500px; margin: auto">
                        @foreach(\App\Referencia::where('id', '!=', $referencia->id)->get()->take(3) as $ref)

                            <div class="portfolio_front portfolio_item portfolio_item_3">
                                <div class="overlayed">
                                    <img src="/images/uploaded/{{$ref->gallery_path}}" alt="referencia" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                                    <div class="overlay text-center">
                                        <div>
                                            <p class="overlay_title">{{$ref->name}}</p>
                                            <p class="portfolio_item_tags" style="max-width: 90%; margin: auto">
                                                {{$ref->perex}}
                                            </p>
                                            <div class="portfolio_icons_container">
                                                <a class="portfolio_icon" href="{{$ref->getURL()}}">
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
                        <a href="{{route('referencie')}}">Všetky referencie</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection