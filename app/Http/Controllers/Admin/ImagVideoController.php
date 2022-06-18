<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagVideo;
use Illuminate\Http\Request;

class ImagVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.video.index',[
            'videos' => ImagVideo::latest()->get(), 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img_path = null;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $img = $request->file('image');
            $img_path= $img->store('/attachments/video' , 'upload_attachments');
        }
        ImagVideo::create([
            'video' => $request->video,
            'image' => $img_path,
        ]);
        toastr()->success(__('The data has been saved successfully'));
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImagVideo  $imagVideo
     * @return \Illuminate\Http\Response
     */
    public function show(ImagVideo $imagVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImagVideo  $imagVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(ImagVideo $imagVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImagVideo  $imagVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImagVideo $imagVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImagVideo  $imagVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagVideo $imagVideo)
    {
        //
    }
}
