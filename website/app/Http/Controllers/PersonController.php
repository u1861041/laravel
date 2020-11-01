<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Person;



class PersonController extends Controller
{

    public function index()
    {
        $People = Person::all ();

        return view ('people.index' , compact('People'));
    }


    public function create()
    {
        return view ('people.create');
    }


    public function store(request $request)
    {

    $attribites = $request -> all(

        'id',
        'name',
        'email',
        'phone'
    );

        $people = Person::create ($attribites);

        return redirect()->route('index')->with('success', 'Player Added');


    }




    public function show(Person $person)
    {

        return view ('people.show', compact('person'));
    }

    public function edit(Person $person)
    {

        return view ('people.update',compact('person'));
    }


    public function update(Request $request, Person $person)
    {

        $request->validate([
            'id'=>'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',

        ]);


        Person::whereid($person)->update($request->all('id','name','email','phone'));

        return redirect()->route('index')->with('success', 'Data Updated');

    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('index')->with('success', 'Data deleted');


    }
}
