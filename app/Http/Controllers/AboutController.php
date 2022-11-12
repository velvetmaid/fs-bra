<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('controls.admins.index-about', compact('about'));
    }

    public function indexAbout()
    {
        $title = 'About Us';
        $contact = Contact::all();
        $about = About::all();
        return View::make('about-us')
            ->with('title', $title)
            ->with(compact('about', 'contact'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::all();
        return View('controls.admins.add-about', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $request->validate([
                'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
                'banner_text' => 'required',
                'banner_span' => 'required',
                'description' => 'required',
                'visi' => 'required',
                'misi' => 'required',
            ]);

            $input = $request->all();

            if ($img = $request->file('banner')) {
                $filename = $img->getClientOriginalName();
                $img->move(public_path() . '/images/abouts/', $filename);
                $input['banner'] = "$filename";
            }
            About::create($input);

            return View('controls.admins.index-about', compact('about'));
        }
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
        $about = About::find($id);
        return View('controls.admins.update-about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { {
            $validator = Validator::make($request->all(), [
                'banner' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240',
                'banner_text' => 'required',
                'banner_span' => 'required',
                'description' => 'required',
                'visi' => 'required',
                'misi' => 'required',
            ]);

            $about = About::find($id); #new
            if ($request->hasFile('banner')) {
                $image          = $request->file('banner'); //
                $newImageName   = $image->getClientOriginalName(); //
                $location       = public_path('/images/abouts/');
                $OldImage       = public_path('/images/abouts/' . $about->banner); #new
                $image->move($location, $newImageName);
                unlink($OldImage); #new
                $about->delete();
                //unlink error
            } /* else {
                $newImageName   = $request->banner;
            } */

            /*          if ($request->hasFile('banenr')) {
                $img
            }
 */
            #you can simplify this as
            $about->banner_text = $request->banner_text;
            $about->banner_span = $request->banner_span;
            $about->description = $request->description;
            $about->visi = $request->visi;
            $about->misi = $request->misi;
            $about->banner = $newImageName;
            $about->save();
            return redirect('about')->with('success', 'Great! About has been successfully uptodate.');


            /*      if ($validator->fails()) {
            } */

            /*          $properties = About::find($id);
            $input = $request->all();

            if ($request->hasFile('banner')) {

                if ($oldImg = json_decode($properties->image)) {
                    unlink(public_path('/images/abouts/' . $oldImg));
                    $properties->delete();
                }
                $img = ($request->file('banner')) {
                    $filename = $img->getClientOriginalName();
                    $img->move(public_path() . '/images/abouts', $filename);
                    $input['banner'] = "$filename";
                }
            }

            $properties->banner_text = $request->banner_text;
            $properties->banner_span = $request->banner_span;
            $properties->description = $request->description;
            $properties->visi = $request->visi;
            $properties->misi = $request->misi;
            $properties->banner = json_encode($imgName);

            $properties->save(); */
            /*            $request->validateRequest();
            $data = [
                'banner_text' => request()->banner_text,
                'banner_span' => request()->banner_span,
                'description' => request()->description,
                'visi' => request()->visi,
                'misi' => request()->misi,
            ];
            $about = About::find($id);
            if (request()->hasFile('banner') && request('banner') != '') {
                $bannerPath = public_path('images/abouts/' . $about->banner);
                if (About::exists($bannerPath)) {
                    unlink($bannerPath);
                }
                $banner = request()->file('banner')->store('uploads', 'public/images/abouts/');
                $data['banner'] = $banner;
                //$about->update($data);
            }
            $about->update($data); */
        }
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
