@extends('backend.layouts.backend-layout')
@section('css')
@toastr_css
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="card-body">
                    <div class="tab nav-border">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02"
                                    role="tab" aria-controls="home-02"
                                    aria-selected="true">{{__('posts details')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02" role="tab"
                                    aria-controls="profile-02" aria-selected="false">{{__('Attachments')}}</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                aria-labelledby="home-02-tab">
                                <table class="table table-striped table-hover" style="text-align:center">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{__('Title')}}</th>
                                            <td>{{ $post->title }}</td>
                                            <th scope="row">{{__('Content')}}</th>
                                            <td>{{$post->content}}</td>
                                            {{-- <th scope="row">{{__('Start Date')}}</th>
                                            <td>{{$post->created_at->date('Y:m:d')}}</td>
                                            <th scope="row">{{__('End Date')}}</th>
                                            <td>{{$post->updated_at->date('Y:m:d')}}</td> --}}
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="profile-02" role="tabpanel" aria-labelledby="profile-02-tab">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <form method="post" action="{{route('post.upload_attachment')}}"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="academic_year">{{__('Attachments')}}
                                                        : <span class="text-danger">*</span></label>
                                                    <input type="file" accept="image/*" name="photos[]" multiple
                                                        required>
                                                    <input type="hidden" name="post_name" value="{{$post->title}}">
                                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                                </div>
                                            </div>
                                            <br><br>
                                            <button type="submit" class="btn btn-primary x-small">
                                                {{__('submit')}}
                                            </button>
                                        </form>
                                    </div>
                                    <br>
                                    <table class="table center-aligned-table mb-0 table table-hover"
                                        style="text-align:center">
                                        <thead>
                                            <tr class="table-secondary">
                                                <th scope="col">#</th>
                                                <th scope="col">{{__('filename')}}</th>
                                                <th scope="col">{{__('created_at')}}</th>
                                                <th scope="col">{{__('Processes')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($post->images as $attachment)
                                            <tr style='text-align:center;vertical-align:middle'>
                                                <td>{{$loop->iteration}}</td>
                                                <td><img src="{{URL::asset('attachments/posts/'.$attachment->imageable->title.'/'.$attachment->filename)}}"
                                                        alt="" height="50px" width="50px"></td>
                                                <td>{{$attachment->created_at->diffForHumans()}}</td>
                                                <td colspan="2">
                                                    <a class="btn btn-outline-info btn-sm"
                                                        href="{{url('admin/download_attachment')}}/{{ $attachment->imageable->title }}/{{$attachment->filename}}"
                                                        role="button"><i class="fas fa-download"></i>&nbsp;
                                                        {{__('Download')}}</a>

                                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                                        data-toggle="modal"
                                                        data-target="#Delete_img{{ $attachment->id }}"
                                                        title="{{ __('Delete') }}">{{__('delete')}}
                                                    </button>

                                                </td>
                                            </tr>
                                            @include('backend.pages.post.delete')
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
