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

    public function oneToManyTwo()
    {
      $keySearch = 'a';
      $countries = Country::where('name','LIKE',"%{$keySearch}%")
                            ->with('states')
                            ->get();

      foreach ($countries as $country) {
          echo $country->name. "<br>";
          $states = $country->states;

          foreach ($states as $state) {
            echo $state->name . "<br>";

            foreach ($state->cities as $city) {
              echo $city->name . "<br>";
            }

          }
      }

    }

    public function oneToManyInsert()
    {
      //Simulando Dados do formulários
      $dataForm = [
        'name'        => 'Ceará',
        'initials'    => 'CE',
        'country_id'  => '2'
      ];

      $insertState = State::created($dataForm);

    }

}
