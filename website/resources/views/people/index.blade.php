@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    <h3 align="center">Football Players Information and data</h3>
                </header>


                <img src="{{ asset('img/index.jpg') }}"  alt=""   width="300" height="300">


            </section>
            <br />

            <br />

            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif



            <table class="table table-bordered table-striped">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>

                @foreach($People as $person)
                    <tr>
                        <td>{{$person['id']}}</td>
                        <td>{{$person['name']}}</td>
                        <td>{{$person['email']}}</td>
                        <td>{{$person['phone']}}</td>
                        <td><a href="{{ route('people1update') }}" class="btn btn-warning">Edit Footballer</a></td>
                        <td>

                            <form action="{{ route('destroy', $person->id) }}" method="Post">


                                @csrf
                                @method('DELETE')

                                <div class="font-semibold bg-red-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                                    <button type=”Submit” name=”button” >Delete Footballer</button>
                            </form>





                        </td>
                    </tr>
                @endforeach

            <ul>


            </ul>
            </table>
        </div>
    </main>
@endsection

