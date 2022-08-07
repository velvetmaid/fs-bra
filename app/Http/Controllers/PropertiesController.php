<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;
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

    public function addProperties(Request $request)
    {
        $validated = $request->validate([
            'properties_name' => 'required',
            'type' => 'required',
            'location' => 'required',
            'image.*' =>  'required|image|mimes:jpg,jpeg,png,gif|max:10240',
            'properties_description' => 'required',
            'price' => 'required',
            'notelp' => 'required',
        ]);

        $imgName = [];
        foreach ($request->file('image') as $img) {
            $filename = $img->getClientOriginalName();
            $img->move(public_path() . '/images/blueprint', $filename);
            $imgName[] = $filename;
        }
        $post = new Properties;
        $post->properties_name = $request->properties_name;
        $post->type = $request->type;
        $post->location = $request->location;
        $post->properties_description = $request->properties_description;
        $post->price = $request->price;
        $post->notelp = $request->notelp;
        $post->image = json_encode($imgName);

        $post->save();
        return back()->withSuccess('Great! Image has been successfully uploaded.');
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
