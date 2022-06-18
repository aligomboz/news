@extends('backend.layouts.backend-layout')
@section('content')
<!--begin::Content-->
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Creat Category
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
    <form action="{{route('categories.store')}}" method="POST">
        @csrf

        <div class="card-body">
            
            <div class="form-group">
                <label>Name Category<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name"
                    name="name" />
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="card-footer">
            <button class="btn btn-primary mr-2">Submit</button>
            <a href="{{route('categories.index')}}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Content-->
@endsection
