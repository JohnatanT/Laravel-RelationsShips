<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{

    public function oneToOne()
    {
      $country = new Country();
      $country->find(1);
      //dd($country->name);

      $location = $country->location;
      echo "Latitude: {$location->latitude}";

    }

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




}
