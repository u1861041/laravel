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
                        <h3 align="center">ADD A NEW FOOTBALL PLAYER</h3>
                    </header>

                    <img src="{{ asset('img/createphoto.jpg') }}"  alt=""   width="250" height="250">

                </section>



                <h8>Enter information below</h8>

            <form method="post" action="/create_people/">
                @csrf

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="font-semibold bg-blue-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    <input name=”id” placeholder=”id” >
                </div>


                <div class="font-semibold bg-blue-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    <input type="text" name="name" id="name"  value="" placeholder="Enter Your Name" class="form-control">
                </div>

                <div class="font-semibold bg-blue-200 text-black-50 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    <input type="text" name="email" id="name" value="" placeholder="Enter your Email" class="form-control">
                </div>

                <div class="font-semibold bg-blue-200 text-black-50 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md" >
                    <input type="text" name="phone" id="phone" value="" placeholder="Enter your phone" class="form-control">
                </div>
                <div class="font-semibold bg-blue-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    <button type=”submit” name=”button” >Add Footballer</button>
                </div>
            </form>






        </div>

@endsection
