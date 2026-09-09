@extends('frontend._layout')
@section('title', '404 - Stránka nebola nájdená')
@section('meta_description', '')
@section('styles')
    <style>
        #footer-form {
            display: none;
        }
        .big_404_text {
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>
@endsection
@section('content')
    <section id="page404" class="container">
        <p class="big_404_text" style="color: #222">Hľadaná stránka nebola nájdená</p>
        <p class="big_404">404</p>
        <a href="/" class="button-style-1 button-2">Domovská Stránka</a>
    </section>
@endsection
@section('scripts')
@endsection