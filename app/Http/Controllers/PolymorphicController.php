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
      //Listando os comentarios da cidade
      $city = City::where('name','São Paulo')->get()->first();
      $comments = $city->comments()->get();

      foreach ($comments as $comment) {
        echo $comment->description;
      }


      //Listando os comentarios do Estado
      $state = State::where('name','São Paulo')->get()->first();
      $comments = $state->comments()->get();

      foreach ($comments as $comment) {
        echo $comment->description;
      }


      //Listando os comentarios do País
      $country = Country::where('name','Brasil')->get()->first();
      $comments = $country->comments()->get();

      foreach ($comments as $comment) {
        echo $comment->description;
      }

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
