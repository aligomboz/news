@extends('layouts.fro_layout')
@section('content')
{{-- 
<div class="row" data-aos="fade-up">
    <div class="col-xl-8 stretch-card grid-margin">
        <div class="position-relative">
            <img src="{{asset('front/images/dashboard/banner.jpg')}}" alt="banner" class="img-fluid" />
            <div class="banner-content">
                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    global news
                </div>
                <h1 class="mb-0">GLOBAL PANDEMIC</h1>
                <h1 class="mb-2">
                    Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                    Postponed, 168 Trains
                </h1>
                <div class="fs-12">
                    <span class="mr-2">Photo </span>10 Minutes ago
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 stretch-card grid-margin">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h2>Latest news</h2>

                <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                    <div class="pr-3">
                        <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                        <div class="fs-12">
                            <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                    </div>
                    <div class="rotate-img">
                        <img src="{{asset('front/images/dashboard/home_1.jpg')}}" alt="thumb"
                            class="img-fluid img-lg" />
                    </div>
                </div>

                <div class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between">
                    <div class="pr-3">
                        <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                        <div class="fs-12">
                            <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                    </div>
                    <div class="rotate-img">
                        <img src="{{asset('front/images/dashboard/home_2.jpg')}}" alt="thumb"
                            class="img-fluid img-lg" />
                    </div>
                </div>

                <div class="d-flex pt-4 align-items-center justify-content-between">
                    <div class="pr-3">
                        <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                        <div class="fs-12">
                            <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                    </div>
                    <div class="rotate-img">
                        <img src="{{asset('front/images/dashboard/home_3.jpg')}}" alt="thumb"
                            class="img-fluid img-lg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="row" data-aos="fade-up">
    <div class="col-lg-3 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Category</h2>
                <ul class="vertical-menu">
                    @foreach ($categories as $category)
                    <li><a href="{{route('category.post',$category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9 stretch-card grid-margin">
        <div class="card">
            <div class="card-body">
                @foreach ($posts as $post)
                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                            <div class="rotate-img">
                                @foreach ($post->images as $attachment)
                                <img class="img-fluid"
                                    src=" {{URL::asset('attachments/posts/'.$attachment->imageable->title.'/'.$attachment->filename)}}"
                                    alt="">
                                @endforeach


                            </div>
                            <div class="badge-positioned">
                                <span class="badge badge-danger font-weight-bold">Flash news</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                            <a href="{{route('show_post',$post->id)}}"> {{$post->title}}</a>
                        </h2>
                        <div class="fs-13 mb-2">
                            <span class="mr-2">Photo </span>{{$post->created_at->diffForHumans()}}
                        </div>
                        <p class="mb-0">
                            اقرا الخبر وشف باقي التفاصيل
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<div class="row" data-aos="fade-up">
    <div class="col-sm-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-title">
                            Video
                        </div>
                        <div class="row">
                            @foreach ($videos as $video)
                            <div class="col-sm-6 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <a href="{{$video->video}}"><img src="{{asset('/'.$video->image)}}" alt="thumb"
                                                class="img-fluid" /></a>
                                    </div>
                                    <div class="badge-positioned w-90">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge badge-danger font-weight-bold">Lifestyle</span>
                                            <div class="video-icon">
                                                <i class="mdi mdi-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="card-title">
                                Latest Video
                            </div>
                            <p class="mb-3">See all</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('front/images/dashboard/home_11.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                Apple Introduces Apple Watch
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('front/images/dashboard/home_12.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                SEO Strategy & Google Search
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('front/images/dashboard/home_13.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                Cycling benefit & disadvantag
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('front/images/dashboard/home_14.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600">
                                The Major Health Benefits of
                            </h3>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-3">
                            <div class="div-w-80 mr-3">
                                <div class="rotate-img">
                                    <img src="{{asset('front/images/dashboard/home_15.jpg')}}" alt="thumb"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <h3 class="font-weight-600 mb-0">
                                Powerful Moments of Peace
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
