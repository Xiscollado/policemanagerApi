<?php

namespace App\Http\Controllers;

use App\File;
use App\FileDetails;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index ()
    {
        return File::with('details')->get();
    }

    public function getFile(Request $request, $id)
    {
        return File::where('user_id', '=' ,$id)->with(['policeRecords', 'vehicles', 'homes', 'money', 'business', 'details'])->get();
    }

    public function updateNote(Request $request, $id)
    {
        $fileDetails = FileDetails::firstOrNew(['user_id' => $id]);
        $fileDetails->notes = $request->note;
        $result = $fileDetails->save() ? 'note created' : 'error creating note';
        return $result;

    }

    public function updateDangerousState(Request $request, $id)
    {
        $fileDetails = FileDetails::firstOrNew(['user_id' => $id]);
        $fileDetails->dangerous = $request->value;
        $result = $fileDetails->save() ? 'dangerous updated' : 'error updating dangerous state';
        return $result;
    }

    public function updateUnderSeekState(Request $request, $id)
    {
        $fileDetails = FileDetails::firstOrNew(['user_id' => $id]);
        $fileDetails->underSeek = $request->value;
        $result = $fileDetails->save() ? 'under seek updated' : 'error updating under seek state';
        return $result;
    }

    public function updateImage(Request $request, $id)
    {
        $fileDetails = FileDetails::firstOrNew(['user_id' => $id]);
        $fileDetails->image = $request->image;
        $result = $fileDetails->save() ? 'image updated' : 'image not updated';
        return $result;
    }
}
