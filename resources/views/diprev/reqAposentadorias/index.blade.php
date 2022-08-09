@extends('layouts.app')
{{-- Page Title --}}
@section('page-title')
Página inicial
@endsection
{{-- This Page Css --}}
@section('css')

@endsection
@section('main-content')

<div class ="row">

    <div class="cards-lista">
        <a href="{{route('reqVoluntaria.index')}}">
            <div class="cardAp 1">

                <div class="card_image"> 
                    <img src="https://media.giphy.com/media/QAsBwSjx9zVKoGp9nr/giphy.gif" /> </div>
                <div class="card_title title-white">
                    <p>Voluntaria</p>
                </div>
            </div>
        </a>


        <div class="cardAp 2">
            <div class="card_image">
                <img src="https://media.giphy.com/media/R6gvnAxj2ISzJdbA63/giphy.gif" />
            </div>
            <div class="card_title title-white">
                <p>Card Title</p>
            </div>
        </div>

        <div class="cardAp 3">
            <div class="card_image">
                <img src="https://media.giphy.com/media/2dQ3FMaMFccpi/giphy.gif" />
            </div>
            <div class="card_title">
                <p>Card Title</p>
            </div>
        </div>

        <div class="cardAp 4">
            <div class="card_image">
                <img src="https://media.giphy.com/media/MZOeErgMGAI5q/giphy.gif" />
            </div>
            <div class="card_title title-black">
                <p>Card Title</p>
            </div>
        </div>

    </div>





</div>
@endsection
@section('js')
<!--<script src="{{asset('js/reqAposentadorias/ApVoluntaria/script.js')}}"></script> -->

@endsection
