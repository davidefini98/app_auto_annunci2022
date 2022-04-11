<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertionController extends Controller
{
    public function show($id){
        return view('form_annuncio', ['user' => $id]);

    }
}
