<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {

        return view('pages.index');

    }
}
