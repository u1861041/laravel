@extends('layouts.app')

@section('content')
<div class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                <h3 align="center">HUDDERSFIELD ACADEMY HOME PAGE</h3>
            </header>


            <img src="{{ asset('img/homephoto.png') }}"  alt=""   width="300" height="300">


        </section>






            <div >

                <a href="{{ route('create') }}">- ADD A FOOTBALLER IN THE ACADEMY</a>

                <br />
                <br />
            </div>

            <div >

                <a href="{{ route('index') }}">- PLAYERS LIST</a>

                <br />
                <br />
            </div>








    </div>

@endsection
