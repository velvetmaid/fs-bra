<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertiesResource;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Properties::all();
        return new PropertiesResource(true, 'Seluruh data properties', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'properties_name' => 'required',
            'type' => 'required',
            'model' => 'required',
            'image' => 'required|array',
            'image.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
            'properties_description' => 'required',
            'price' => 'required',
            'notelp' => 'required',
        ]);

        if ($validator->fails()) {
            return new PropertiesResource(false, 'Data gagal ditambahkan!', null);
        }

        $imgName = [];
        foreach ($request->file('image') as $img) {
            $filename = $img->getClientOriginalName();
            $img->move(public_path() . '/images/blueprints', $filename);
            $imgName[] = $filename;
        }

        $post = new Properties;
        $post->properties_name = $request->properties_name;
        $post->type = $request->type;
        $post->model = $request->model;
        $post->properties_description = $request->properties_description;
        $post->price = $request->price;
        $post->notelp = $request->notelp;
        $post->image = json_encode($imgName);

        $post->save();
        return new PropertiesResource(true, 'Data berhasil ditambahkan.', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties = Properties::whereId($id)->first();

        if ($properties) {
            return new PropertiesResource(true, 'Data properties dengan id ;', $properties);
        } else {
            return new PropertiesResource(false, 'Data tidak ditemukan!', $properties);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Properties $properties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Properties $properties, $id)
    {
        $validator = Validator::make($request->all(), [
            'properties_name' => 'required',
            'type' => 'required',
            'model' => 'required',
            'image' => 'required|array',
            'image.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
            'properties_description' => 'required',
            'price' => 'required',
            'notelp' => 'required',
        ]);

        if ($validator->fails()) {
            return new PropertiesResource(false, 'Data gagal diubah!', null);
        }

        $properties = Properties::find($id);
        if ($request->hasFile('image')) {

            if ($oldImg = json_decode($properties->image)) {
                $j = count($oldImg);
                for ($i = 0; $i < $j; $i++) {
                    unlink(public_path('/images/blueprints/' . $oldImg[$i]));
                }
                $properties->delete();
            }
            $imgName = [];
            foreach ($request->file('image') as $img) {
                $filename = $img->getClientOriginalName();
                $img->move(public_path() . '/images/blueprints', $filename);
                $imgName[] = $filename;
            }
        }

        $properties->properties_name = $request->properties_name;
        $properties->type = $request->type;
        $properties->model = $request->model;
        $properties->properties_description = $request->properties_description;
        $properties->price = $request->price;
        $properties->notelp = $request->notelp;
        $properties->image = json_encode($imgName);

        $properties->save();
        return new PropertiesResource(true, 'Data berhasil diubah.', $properties);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properties $properties, $id)
    {
        $properties = Properties::find($id);
        $image = json_decode($properties->image);
        $length = count($image);
        for ($i = 0; $i < $length; $i++) {
            unlink(public_path('/images/blueprints/' . $image[$i]));
        }
        $properties->delete();
        return new PropertiesResource(true, 'Data berhasil dihapus.', null);
    }
}
