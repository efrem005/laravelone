@extends('layouts.main')

@section('title')
    @parent {{$new->title}}
@endsection

@section('header_title')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h2> {{$new->title}} </h2>
                    <ul class="list-unstyled mt-4">
                        <li class="list-inline-item h6 user text-muted mr-2"><i class="mdi mdi-account"></i>{{$new->author}}</li>
                        <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i>{{$new->created_at}}</li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
@endsection

@section('content')
    <!-- BLog Start -->
        <div class="card blog blog-detail border-0 shadow rounded">
            <img src="/assets/images/blog/01.jpg" class="img-fluid rounded-top" alt="">
            <div class="card-body content">

                        <h6><i class="mdi mdi-tag text-primary mr-1"></i><a href="javscript:void(0)" class="text-primary">{{$new->category->title}}</a></h6>

{{--                <p class="text-muted mt-3">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. </p>--}}
                <blockquote class="blockquote mt-3 p-3">
                    <p class="text-muted mb-0 font-italic">{{$new->description}}</p>
                </blockquote>
{{--                <p class="text-muted">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>--}}
                <div class="post-meta mt-3">
                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card shadow rounded border-0 mt-4">
            <div class="card-body">
                <h5 class="card-title mb-0">Comments :</h5>

                <ul class="media-list list-unstyled mb-0">
                    <li class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div class="media align-items-center">
                                <a class="pr-3" href="#">
                                    <img src="/assets/images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                </a>
                                <div class="commentor-detail">
                                    <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                    <small class="text-muted">15th August, 2019 at 01:25 pm</small>
                                </div>
                            </div>
                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted font-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card shadow rounded border-0 mt-4">
            <div class="card-body">
                <h5 class="card-title mb-0">Leave A Comment :</h5>

                <form class="mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group position-relative">
                                <label>Your Comment</label>
                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control pl-5" required=""></textarea>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="form-group position-relative">
                                <label>Name <span class="text-danger">*</span></label>
                                <i data-feather="user" class="fea icon-sm icons"></i>
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control pl-5" required="">
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="form-group position-relative">
                                <label>Your Email <span class="text-danger">*</span></label>
                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                <input id="email" type="email" placeholder="Email" name="email" class="form-control pl-5" required="">
                            </div>
                        </div><!--end col-->

                        <div class="col-md-12">
                            <div class="send">
                                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form><!--end form-->
            </div>
        </div>
    <!-- BLog End -->
@endsection
