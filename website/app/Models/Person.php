<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];



    public function getPathAttribute (){
        return $this -> path();

}
    public function path (){
        return '/create_people/' . $this -> id;
    }


}
