<?php

namespace App\Http\Controllers;

use App\Models\Location;
use guru\Api\Google\Places;
use Illuminate\Support\Facades\Input;

class Api extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function googlePlaces()
    {
        $term = Input::get('text');

        $places = new Places();

        $response = $places->getPlace($term, (new Location()));

        return response()->json($response);
    }
}
