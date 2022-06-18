<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactUs;
use App\Models\ImagVideo;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index',[
            'categories' => Category::latest()->active()->get(),
            'posts' => Post::latest()->active()->get(),
            'videos' => ImagVideo::latest()->take(4)->get(),
            
        ]);
    }
    public function aboutAs(){
        return view('front.pages.about_us');
    }
    public function test(){
        return view('backend.index');
    }

    public function show_post($id){
        $post = Post::findOrFail($id);
        return view('front.pages.show_post',[
            'post' =>$post,
        ]);
    }

    public function categoryPost($id){
         $catPos =  Post::with('category')->where('category_id',$id)->get();
        return view('front.pages.categort_post',[
            'catPos' =>$catPos,
        ]);
    }
    public function contactUs(){
        return view('front.pages.contact_us');
    }
    public function storeContactUs(Request $request){
        ContactUs::create([
            'content' => $request->content,
            'name' => $request->name,
            'email' =>$request->email,
        ]);
        return redirect()->route('index');
    }
}
