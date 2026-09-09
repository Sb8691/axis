@extends('frontend._layout')
@section('title', 'Referencie')
@section('meta_description', 'Dodávka reklamných LED mantinelov a scoreboardu včítane riadiaceho systému s možnosťou naprogramovania statických piktogramov alebo...')
@section('styles')
    <style>
        .isotope-item {
            margin: 0 10px!important;
            width: calc(33.33% - 20px);
        }
        .date_container {
            padding: 10px 20px!important;
        }
    </style>
@endsection
@section('content')
    <section id="headline_breadcrumbs_bar" class="" style="background-image: url({{asset('/images/uploaded/' . $photos->find(25)->path)}}); padding: 200px 0; background-position: center;"></section>
    <section class="tcvpb_section_tc section_with_header" id="referencie-zoznam">
        <div class="tcvpb_section_content sameHeight">
            <ul class="portfolio_filter isotope-filter option-set clearfix" data-option-key="filter">
                <li>
                    <a href="#" data-option-value="*" class="portfolio_filter_button selected">Všetko</a>
                </li>
                @foreach(\App\ReferenciaCategory::all()->sortBy('sort') as $category)
                    <li>
                        <a href="#" class="portfolio_filter_button" data-option-value=".cat{{$category->id}}" data-option-alt="{{makeStringURLFriendly(strtolower($category->name))}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tcvpb_container isotope-container">
                @foreach(\App\Referencia::all()->sortBy('sort') as $referencia)
                    <div class="tcvpb_column_tc_span4 isotope-item cat{{$referencia->category_id}}">
                        <div class="tcvpb_posts_shortcode tcvpb_posts_shortcode-2 clearfix has_thumbnail">
                            <img src="{{'/images/uploaded/' . $referencia->gallery_path}}" class="attachment-full size-full wp-post-image" alt="{{$referencia->perex}}" title="{{$referencia->perex}}">
                            <div class="tcvpb_latest_news_shortcode_content">
                                <h5 class="makeSameHeight" shonlg shonmd shindex="0">
                                    <a href="{{$referencia->getURL()}}">{{$referencia->name}}</a>
                                </h5>
                                <p class="makeSameHeight" shonlg shonmd shindex="1">{{$referencia->perex}}</p>
                                <div class="date_container">
                                    <a href="{{$referencia->getURL()}}" class="button-style-1 button-small button-2">Viac</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="tcvpb_section_tc no_padding_top_and_bottom blue_box_background" id="referencie-cta">
        <div class="tcvpb_section_content">
            <div class="tcvpb_container">
                <div class="tcvpb_column_tc_span12">
                    <div class="tcvpb-callout_box tcvpb-callout_box_style_4 white_text">
                        <span class="tcvpb-callout_box_title">{{$ctas->find(11)->title}}</span>
                        <a href="{{$ctas->find(11)->button_link}}" target="_self" class="tcvpb-button1 tcvpb-button_rounded tcvpb-button_small tcvpb-button_transparent button-1">{{$ctas->find(11)->button_text}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script>
        (function($) {
            $(window).load(function(){
                isotope = $('.isotope-container').isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows'
                });
                $('.isotope-filter a').click(function(){
                    var filter = $(this).attr('data-option-value');
                    isotope.isotope({filter: filter});
                });
            });

            $(window).on('load', function () {
                if(window.location.hash) {
                    $('[data-option-alt="'+window.location.hash.replace('#','')+'"]').trigger('click');
                }
            });
        })(jQuery);
    </script>
@endsection