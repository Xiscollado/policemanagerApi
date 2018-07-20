<?php

namespace App\Http\Controllers;

use App\Crime;
use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function index()
    {
        return Crime::all();
    }

    public function updateCrime(Request $request, $id)
    {
        $crimeDetails = Crime::firstOrNew(['id' => $id]);
        $crimeDetails->title = $request->title;
        $crimeDetails->description = $request->description;
        $crimeDetails->fine = $request->fine;
        $crimeDetails->months = $request->months;
        $result = $crimeDetails->save() ? 'crime updated' : 'error updating crime';
        return $result;

    }

}
