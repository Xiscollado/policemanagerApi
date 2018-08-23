<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){
        return Title::all();
    }

    public function createTitle(Request $request)
    {
        $title = new Title;
        $title->name = $request->name;
        $title->save();
        return $title;
    }

    public function updateTitle(Request $request, $id)
    {
        $titleDetails = Title::firstOrNew(['id' => $id]);
        $titleDetails->name = $request->name;
        $result = $titleDetails->save() ? 'title updated' : 'error updating title';
        return $result;
    }

    public function deleteTitle(Request $request, $id)
    {
        $crime = Title::find($id);
        $crime->delete();
        return json_encode(['result' => 'done']);
    }

}
