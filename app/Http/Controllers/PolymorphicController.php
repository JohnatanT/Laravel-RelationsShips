<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Comment;

class PolymorphicController extends Controller
{
    public function polymorphic()
    {

    }

    public function polymorphicInsert()
    {
      //Inserindo Comentario para a cidade
      $city = City::where('name','São Paulo')->get()->first();

      $comment = $city->comments->created([
        'description' => 'New Comment'
      ]);

      //Inserindo Comentario para o Estado
      $state = State::where('name','São Paulo')->get()->first();

      $comment = $state->comments->created([
        'description' => 'New Comment'
      ]);


      //Inserindo Comentario para o País
      $country = Country::where('name','Brasil')->get()->first();

      $comment = $country->comments->created([
        'description' => 'New Comment'
      ]);


    }


}
