<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
      //Recuperando o país
      $country = Country::where('name','Brasil')->get()->first();
      //Recupera todos os estados relacionados com o país
      $states = $country->states;
      //Listando os estados
      foreach ($states as $state) {
        echo "Estado: ". $state->name . "<br>";
      }

    }


    
}
