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
}
