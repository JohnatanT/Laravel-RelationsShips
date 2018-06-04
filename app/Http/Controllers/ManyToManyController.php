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

    public function manyToManyInsert()
    {
      //Simulando dados do formulario
      $dataForm = [3,4,5];

      //Empresa a ser vinculada
      $company = Company::find(1);

      //Faz o vinculo
      //$company->cities()->attach($dataForm);
      $company->cities()->sync($dataForm);

      //Remove o vinculo
      //$company->cities()->detach($dataForm);

    }


}
