<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesController extends Controller
{

    public function index()
    {

        return view('pages.types.index');

    }

}
