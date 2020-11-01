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
                    <h3 align="center">UPDATE DATA OF PLAYER</h3>
                </header>


                <img src="{{ asset('img/update.jpg') }}"  alt=""   width="250" height="250">


            </section>

                <form action="{{ route('people1update' , $person->id) }}" method="Post">
                    @csrf
                    @method('PUT')

                    <div class="font-semibold bg-red-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        <input type="text" name="id" id="id"  class="form-control"  value="{{$person->id}}"  placeholder="Enter id" />
                    </div>

                    <div class="font-semibold bg-red-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        <input type="text" name="name" id="name"  class="form-control"  value="{{$person->name}}"  placeholder="Enter First Name" />
                    </div>

                    <div class="font-semibold bg-red-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        <input type="text" name="email" id="name"  class="form-control" value="{{$person->email}}" placeholder="Enter email" />
                    </div>
                    <div class="font-semibold bg-red-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        <input type="text" name="phone" id="phone"  class="form-control" value="{{$person->phone}}"  placeholder="Enter phone" />
                    </div>
                    <div class="font-semibold bg-red-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        <button type=”Submit” name=”button” >update Footballer</button>









        </div>

@endsection
