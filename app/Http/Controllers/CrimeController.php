<?php

namespace App\Http\Controllers;

use App\Crime;
use App\Title;
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

    public function createCrime(Request $request)
    {
        $crime = new Crime;
        $crime->chapterId = $request->chapter;
        $crime->title = $request->title;
        $crime->description = $request->description;
        $crime->fine = $request->fine;
        $crime->months = $request->months;
        $crime->save();
        return json_encode(['result' => 'done']);
    }

    public function deleteCrime(Request $request, $id)
    {
        $crime = Crime::find($id);
        $crime->delete();
        return json_encode(['result' => 'done']);
    }

}
