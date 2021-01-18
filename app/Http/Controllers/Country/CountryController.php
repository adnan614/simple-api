<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountryModel;

class CountryController extends Controller
{
    public function country()
    {
          return response()->json(CountryModel::get());
    }

    public function countryById($id)
    {
        return response(CountryModel::find($id), 200);
    }

    public function countrySave(Request $request)
    {
        $country = CountryModel::create($request->all());
        return response()->json($country, 201);
    }

    public function countryUpdate(Request $request, CountryModel $country)
    {
        $country->update($request->all());
        return response()->json($country, 200);
    }

    public function countryDelete(Request $request, CountryModel $country)
    {
        $country->delete();
        return response()->json(null, 204);
    }
}
 