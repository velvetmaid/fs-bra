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
        return View::make('controls.admins.index-properties')
            ->with('title', $title)
            ->with(compact('properties'));
    }

    public function addproperties(Request $request)
    {
        $properties = Properties::create($request->all());
        if ($request->hasFile('properties_image')) {
            $request->file('properties_image')->move('images/properties-image/', $request->file('properties_image')->getClientOriginalName());
            $properties->properties_image = $request->file('properties_image')->getClientOriginalName();
            $properties->save();
        }
        return View::make('controls.admins.add-properties', ['successMsg' => 'Property is updated .']);
    }

    public function updateproperties($id)
    {

        $properties = Properties::find($id);
        return View('controls.admins.update-properties', compact('properties'));
    }

    public function updatedataproperties(Request $request, $id)
    {
        $properties = Properties::find($id);
        $properties->update($request->all());
        return redirect()->route('indexproperties')->with('success');
    }

    public function destroyproperties($id)
    {
        $properties = Properties::find($id);
        $properties->delete();
        return redirect('index-properties')->with('success', 'Data telah dihapus.');
    }
}
