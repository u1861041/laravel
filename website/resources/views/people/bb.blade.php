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
                    Dashboard
                </header>


            </section>




            <h7> CREATE :  </h7>

            <form method="post" action="/people/">
                @csrf

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <input name=”id” placeholder=”id” >
                </div>
                <div class="form-group">
                    <input type="text" name="name" id="name"  value="" placeholder="Enter Your Name" class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="email" id="name" value="" placeholder="Enter your Email" class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="phone" id="phone" value="" placeholder="Enter your phone" class="form-control">
                </div>
                <div class="form-group">
                    <button type=”submit” name=”button” >Add Footballer</button>
                </div>
            </form>






        </div>

@endsection



        $this->validate($request, [
        'id'    =>  'required',
        'name'    =>  'required',
        'email'     =>  'required',
        'phone'     =>  'required'
        ]);
        $people = Person::edit ($attributes);
        $people->id = $request->get('id');
        $people->name = $request->get('name');
        $people->email = $request->get('email');
        $people->phone = $request->get('phone');
        $people->save();
        return redirect()->route('people.index')->with('success', 'Data Updated');


        <h7> update :  </h7>

        <form action="{{ route('people1update' /**, $people->id*/) }}" method="post">
            @csrf
            {{method_field('PUT')}}

            <input type="hidden" name="_method" value="PATCH" />



            <div class="form-group">
                <input type="text" name="name" id="name"  class="form-control"  value="{{$people->name}}"  placeholder="Enter First Name" />
            </div>
            <div class="form-group">
                <input type="text" name="email" id="name"  class="form-control" value="{{$people->name}}" placeholder="Enter email" />
            </div>
            <div class="form-group">
                <input type="text" name="phone" id="phone"  class="form-control" value="{{$people->name}}"  placeholder="Enter phone" />
            </div>
            <div class="form-group">
                <button type=”submit” name=”button” >update Footballer</button>
            </div>


        </form>


        <input type="hidden" name="_method" value="PUT">

        <h7> update :  </h7>

        <form action="{{ route('people1update' , $people->id) }}" method="post">
            @csrf

            <input type="hidden" name="_method" value="PUT" >



            <div class="form-group">
                <input type="text" name="name" id="name"  class="form-control"  placeholder="Enter First Name" />
            </div>
            <div class="form-group">
                <input type="text" name="email" id="name"  class="form-control"  placeholder="Enter email" />
            </div>
            <div class="form-group">
                <input type="text" name="phone" id="phone"  class="form-control"   placeholder="Enter phone" />
            </div>
            <div class="form-group">
                <button type=”submit” name=”button” >update Footballer</button>
            </div>


        </form>


        <div class="form-group">
            <input type="text" name="name" id="name"  class="form-control"  value="{{$person->name}}"  placeholder="Enter First Name" />
        </div>
        <div class="form-group">
            <input type="text" name="email" id="name"  class="form-control" value="{{$person->email}}" placeholder="Enter email" />
        </div>
        <div class="form-group">
            <input type="text" name="phone" id="phone"  class="form-control" value="{{$person->phone}}"  placeholder="Enter phone" />
        </div>
        <div class="form-group">
            <button type=”Submit” name=”button” >update Footballer</button>
        </div>
