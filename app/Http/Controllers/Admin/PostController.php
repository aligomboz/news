<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $post = Post::filter($request)->latest()->get();
        $category = Category::get();
        return view('backend.pages.post.index', [
            'posts' => $post,
            'categories' => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.post.create', [
            'categories' => Category::active()->get(),
            'users' => User::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            // return $request->except('image','_token');
            // return $request;
            // $post = Post::get();

            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'is_active' => 1,
                'author_id' => $request->author_id,
                'category_id' => $request->category_id,
            ]);
            if ($request->hasfile('image')) {
                foreach ($request->file('image') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->storeAs('attachments/posts/' . $post->title, $file->getClientOriginalName(), 'upload_attachments');
                    // insert in image_table
                    $images = new Image();
                    $images->filename = $name;
                    $images->imageable_id = $post->id;
                    $images->imageable_type = Post::class;
                    $images->save();
                }
            }
            DB::commit();
            toastr()->success(__('The data has been saved successfully'));
            return redirect()->route('posts.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // return $post;
        return view('backend.pages.post.show',[
            'post' =>$post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        return $request;
    }
    
    public function upload_attachment(Request $request){
        
        foreach($request->file('photos') as $file)
        {
            $name = $file->getClientOriginalName();
            $file->storeAs('attachments/posts/'.$request->post_name, $file->getClientOriginalName(),'upload_attachments');

            // insert in image_table
            $images= new Image();
            $images->filename=$name;
            $images->imageable_id = $request->post_id;
            $images->imageable_type = Post::class;
            $images->save();
        }
        toastr()->success(__('The data has been saved successfully'));
        return redirect()->route('posts.show',$request->post_id);
    }
    public function delete_attachment(Request $request)
    {
        // Delete img in server disk
        Storage::disk('upload_attachments')->delete('attachments/posts/'.$request->post_name.'/'.$request->filename);

        // Delete in data
        image::where('id',$request->id)->where('filename',$request->filename)->delete();
        toastr()->error(__('The data has been deleted successfully'));
        return redirect()->route('posts.show',$request->post_id);
    }
}
