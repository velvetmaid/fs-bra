<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideshow = Slideshow::all();
        return view('controls.admins.index-slideshow', compact('slideshow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slideshow = Slideshow::all();
        return View('controls.admins.add-slideshow', compact('slideshow'));
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
            'slide_image' => 'required|array',
            'slide_image.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        if ($validator->fails()) {
        }

        $imgName = [];
        foreach ($request->file('slide_image') as $img) {
            $filename = $img->getClientOriginalName();
            $img->move(public_path() . '/images/slideshows', $filename);
            $imgName[] = $filename;
        }

        $post = new Slideshow;
        $post->slide_image = json_encode($imgName);

        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slideshow = Slideshow::find($id);
        return View('controls.admins.update-slideshow', compact('slideshow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'slide_image' => 'required|array',
            'slide_image.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        if ($validator->fails()) {
        }

        $slideshow = Slideshow::find($id);
        if ($request->hasFile('slide_image')) {

            if ($oldImg = json_decode($slideshow->slide_image)) {
                $j = count($oldImg);
                for ($i = 0; $i < $j; $i++) {
                    unlink(public_path('/images/slideshows/' . $oldImg[$i]));
                }
                $slideshow->delete();
            }
            $imgName = [];
            foreach ($request->file('slide_image') as $img) {
                $filename = $img->getClientOriginalName();
                $img->move(public_path() . '/images/slideshows', $filename);
                $imgName[] = $filename;
            }
        }

        $slideshow->slide_image = json_encode($imgName);

        $slideshow->save();
        return redirect("slideshow")
            ->with('success', 'Pesan anda sudah terkirim, tunggu hingga admin menghubungi kamu.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
