<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Properties;
use Spatie\FlareClient\View;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function authentic()
    {
        $role = Auth::user()->role;

        if ($role == 'operator') {
            return view('controls.operator.accounts');
        }
        if ($role == 'admin') {
            $title = 'Detail Properties';
            $properties = Properties::all();
            return View('controls/admins/index-properties')
                ->with('title', $title)
                ->with(compact('properties'));
        }
    }
}
