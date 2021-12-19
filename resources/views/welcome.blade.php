@extends('layouts.master')

{{-- Page Meta Data --}}
@section('page-title','Page Title')

@section('header')
    <h1 class="">
        <a href="">TRABUS APP - ALI KASMOU</a>
    </h1>
@endsection

@section('main')

    <div class="
    m-10
    flex
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
    <form method="POST" action="{{ url('my-card') }}" class="flex flex-col w-full h-full justify-center items-center p-10">
        <h2 class="text-2xl">Enter Your username</h2>
        <input type="text" name="username" class="p-2 px-6 border-purple-700 border-2 rounded-xl w-full">
        <input type="submit" value="Submit" class="bg-yellow-400 px-8 py-1 rounded-xl mt-4 cursor-pointer">
    </form>
    </div>

@endsection
@section('footer')
    <a href="https://www.linkedin.com/in/ali-kasmou/" class="text-white">MADE WITH 	&#10084; ALI KASMOU</a>
@endsection
