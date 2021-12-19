@extends('layouts.master')

{{-- Page Meta Data --}}
@section('page-title','Page Title')

@section('header')
    <h1 class="text-2xl w-full text-center h-full flex justify-center items-center text-white">
        <a href="">TRABUS APP { Page Name }</a>
    </h1>
@endsection
@section('main')
<div class="">
    <form action="{{url()}}" method="post">
        @csrf
        <input type="text" name="name">
    </form>
</div>

@endsection

@section('footer')
    <a href="https://www.linkedin.com/in/ali-kasmou/" class="text-white">MADE WITH 	&#10084; ALI KASMOU</a>
@endsection
