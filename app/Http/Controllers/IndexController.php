<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $guest = Guest::all();
        return view('welcome',[
            'guest' => $guest
        ]);
    }
}
