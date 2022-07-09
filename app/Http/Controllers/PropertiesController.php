<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Support\Facades\View;

class PropertiesController extends Controller
{

    public function properties()
    {
        $title = 'Home';
        $properties = Properties::all();
        return View::make('index')
            ->with('title', $title)
            ->with(compact('properties'));
    }

    public function indexproperties()
    {
        $title = 'Detail Properties';
        $properties = Properties::all();
        return View::make('controls/admins/index-properties')
            ->with('title', $title)
            ->with(compact('properties'));
    }

    public function addproperties(Request $request)
    {
        Properties::create($request->all());
    }
}
