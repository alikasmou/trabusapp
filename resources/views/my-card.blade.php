<?php
use SimpleSoftwareIO\QrCode\Facades\QrCode;
?>
@extends('layouts.master')

{{-- Page Meta Data --}}
@section('page-title','Page Title')

@section('header')
    <h1 class="">
        <a href="">TRABUS APP - ALI KASMOU</a>
    </h1>
@endsection
@section('main')
    <div class="flex justify-center items-center ">

        @if($user_card)
        <div class="w-9/12 bg-yellow-400 flex flex-col justify-center items-center rounded-lg shadow-2xl shadow-yellow p-10 gap-2">
            <div>
                <div class="text-4xl uppercase">
                    {{$user_card->fullname}}
                </div>
                <div class="text-center text-xl">
                    {{$user_card->type->name}}
                </div>
            </div>
            <div>{{QrCode::generate($user_card->card->number)}}</div>
            <div class="flex flex-col items-center justify-center">
                <span>Balance</span>
                <span class="text-2xl">
                    {{$user_card->card->balance}} TL
                </span>
            </div>
        </div>
        @endif

        @endsection

    </div>
@section('footer')
    <a href="https://www.linkedin.com/in/ali-kasmou/" class="text-white">MADE WITH 	&#10084; ALI KASMOU</a>
@endsection
