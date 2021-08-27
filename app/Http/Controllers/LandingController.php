<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        $data = Landing::first(); //gabisa

        // return $data;
        return view('pages.hello', [
            'data' => $data
        ]);
    }
}
