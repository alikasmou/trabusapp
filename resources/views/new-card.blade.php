@extends('layouts.master')

{{-- Page Meta Data --}}
@section('page-title','Page Title')

@section('header')
    <h1 class="text-2xl w-full text-center h-full flex justify-center items-center text-white">
        <a href="">TRABUS APP { Page Name }</a>
    </h1>
@endsection

@section('main')
    <div class="
    lg:col-span-10
    lg:col-start-2
    col-span-10
    col-start-2
    flex
    justify-center
    items-center
    bg-purple-600
    hover:bg-purple-500
    hover:border-white border-opacity-70
    border-4
    hover:border-opacity-90
    duration-500 ease-in-out
    shadow-2xl
    rounded-xl
    cursor-pointer
    overflow-hidden
    ">
        <h1 class="
            flex
            w-full
            h-full
            justify-center
            items-center
            text-4xl
            text-white">
            {{ __('main.new-card') }}
        </h1>
    </div>
    <div class="
    lg:col-span-10
    lg:col-start-2
    col-span-10
    col-start-2
    flex
    p-20
    bg-blue-50
    hover:bg-blue-50
    hover:border-yellow-400
    border-4
    border-yellow-300
    border-opacity-70
    hover:border-opacity-90
    duration-500 ease-in-out
    shadow-2xl
    rounded-xl
    cursor-pointer
    overflow-hidden">
    awkjhcklwjerer
    </div>
@endsection

@section('footer')
    <a href="https://www.linkedin.com/in/ali-kasmou/" class="text-white">MADE WITH 	&#10084; ALI KASMOU</a>
@endsection
