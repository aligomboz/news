@extends('backend.layouts.backend-layout')
@section('content')
<!--begin::Content-->
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Creat post
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
        <div class="form-group mb-8">
            <div class="alert alert-custom alert-default" role="alert">
                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                <div class="alert-text">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <label for="inputCity">{{__('Categoreis')}}</label>
                <select class="custom-select my-1 mr-sm-2" name="category_id">
                    <option selected>{{__('Choose')}}...</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="inputCity">{{__('users')}}</label>
                <select class="custom-select my-1 mr-sm-2" name="author_id">
                    <option selected>{{__('Choose')}}...</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                @error('author_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Title<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title"
                    name="title" />
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Content<span class="text-danger">*</span></label>
                <textarea rows="10" class="form-control @error('content') is-invalid @enderror"
                    name="content"></textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Image<span class="text-danger">*</span></label>
                <input type="file"  accept="image/*" class="form-control @error('image') is-invalid @enderror" placeholder="Enter image"
                    name="image[]" multiple/>
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary mr-2">Submit</button>
            <a href="{{route('userss.index')}}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Content-->
@endsection
