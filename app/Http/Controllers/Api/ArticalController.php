<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    public function index(){
        $post = Post::latest()->get();
        $data = [
            'success' => 200,
            'message' => 'تم العملية بنجاح',
            'articles'=>PostResource::collection($post),
        ];
        return response()->json($data);
    }
}
