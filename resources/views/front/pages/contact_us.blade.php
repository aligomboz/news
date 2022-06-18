@extends('layouts.fro_layout')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
            <div class="card-body">
                <div class="aboutus-wrapper">
                    <h1 class="mt-5 text-center mb-5">
                        Contact Us
                    </h1>
                    <div class="row">
                        <div class="col-lg-12 mb-5 mb-sm-2">
                            <form action="{{route('store.contact.us')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="content" class="form-control textarea" placeholder="Comment *"
                                                id="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" id="name" aria-describedby="name"
                                                placeholder="Name *" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email" aria-describedby="email"
                                                placeholder="Email *" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-dark font-weight-bold mt-3">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
