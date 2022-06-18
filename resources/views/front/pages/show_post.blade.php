@extends('layouts.fro_layout')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <div class="aboutus-wrapper">
                    <h1 class="mt-5">
                        {{$post->title}}
                    </h1>
                    @foreach($post->images as $attachment)
                    <img class="img-fluid mb-5" src="{{URL::asset('attachments/posts/'.$attachment->imageable->title.'/'.$attachment->filename)}}"
                        alt="" > @endforeach
                    <p class="font-weight-600 fs-15 text-center">
                        {{$post->content}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
