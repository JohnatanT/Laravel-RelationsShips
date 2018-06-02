<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{

    //Recuperar dados One to One
    public function oneToOne()
    {
      $country = new Country();
      $country->find(1);
      //dd($country->name);

      $location = $country->location;
      echo "Latitude: {$location->latitude}";

    }

    //Recuperar dados One to One inverso
    public function oneToOneInverse()
    {
      $latitude = 123;
      $longitude = 321;

      $location = new Location::where('latitude',$latitude)
                              ->where('longitude',$longitude)
                              ->get()
                              ->first();

      $country = $location->country;
      echo $country->name;
    }

    //Inserindo dados de um formulário para One to One
    public function OneToOneInsert(Request $request)
    {
      //Simulando os dados do formulario
      $dataForm = [
          'name'          => 'Alemanha',
          'longitude'     => '789',
          'latitude'      => '987'
      ];

      //Inserindo nome do País
      $country = Country:created($dataForm);
      //Recuperando ID inserido
      $dataForm = ['country_id'] = $country->id;
      //Inserindo ID do páis e latitude,longitude
      $location = Location::created($dataForm);
    }


}
