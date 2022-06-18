@extends('layouts.fro_layout')
@section('content')
<div class="col-sm-12">
    <div class="card" data-aos="fade-up">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="font-weight-600 mb-4">
                        @foreach ($catPos as $item)
                           {{$item->category->name ?? ''}}
                        @endforeach
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($catPos as $item)
                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="rotate-img">
                                @foreach($item->images as $attachment)
                                <img class="img-fluid mb-5"
                                    src="{{URL::asset('attachments/posts/'.$attachment->imageable->title.'/'.$attachment->filename)}}"
                                    alt=""> @endforeach </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                            <h2 class="font-weight-600 mb-2">
                                {{$item->title}}
                            </h2>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>{{$item->created_at->diffForHumans()}}
                            </p>
                            <p class="fs-15">
                               {{$item->content}}
                            </p>
                        </div>
                    </div>
                    @endforeach


                </div>
                {{-- <div class="col-lg-4">
                    <h2 class="mb-4 text-primary font-weight-600">
                        Latest news
                    </h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Ways to stay social online while in self..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/sports/Sports_1.jpg" alt="banner"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            Premier League players join charity..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/sports/Sports_2.jpg" alt="banner"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="font-weight-600 mb-1">
                                            UK Athletics board changed stance on..
                                        </h5>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/sports/Sports_3.jpg" alt="banner"
                                                class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trending">
                        <h2 class="mb-4 text-primary font-weight-600">
                            Trending
                        </h2>
                        <div class="mb-4">
                            <div class="rotate-img">
                                <img src="../assets/images/sports/Sports_4.jpg" alt="banner" class="img-fluid" />
                            </div>
                            <h3 class="mt-3 font-weight-600">
                                Virus Kills Member Of Advising Iran’s Supreme
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="rotate-img">
                                <img src="../assets/images/sports/Sports_5.jpg" alt="banner" class="img-fluid" />
                            </div>
                            <h3 class="mt-3 font-weight-600">
                                Virus Kills Member Of Advising Iran’s Supreme
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="rotate-img">
                                <img src="../assets/images/sports/Sports_6.jpg" alt="banner" class="img-fluid" />
                            </div>
                            <h3 class="mt-3 font-weight-600">
                                Virus Kills Member Of Advising Iran’s Supreme
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
