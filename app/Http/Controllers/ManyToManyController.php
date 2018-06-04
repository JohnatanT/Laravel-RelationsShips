<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
      $city = City::where('name','São Paulo')->get()->first();

      $companies = $city->companies;

      foreach ($companies as $company) {
        echo $company->name;
      }
    }


    public function manyToManyInverse()
    {
      $company = Company::where('name','Espcializa TI')->get()->first();

      $cities = $company->cities;

      foreach ($cities as $coity) {
        echo $city->name;
      }
    }
}
