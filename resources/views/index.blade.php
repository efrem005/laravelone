@extends('layouts.main')

@section('title')
    @parent Главная
@endsection

@section('header_title')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4> Новостной блог </h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
@endsection

@section('content')
    @foreach($news as $new)
        <div class="col-lg-6 col-md-12 mb-4 pb-2">
            <div class="card blog rounded border-0 shadow">
                <div class="position-relative">
                    <img src="/assets/images/blog/01.jpg" class="card-img-top rounded-top" alt="...">
                    <div class="overlay rounded-top bg-dark"></div>
                </div>
                <div class="card-body content">
                    <h5><a href="{{route('news.show', ['new' => $new->id])}}" class="card-title title text-dark">{{$new->title}}</a></h5>
                    <div class="post-meta d-flex justify-content-between mt-3">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                        </ul>
                        <a href="{{route('news.show', ['new' => $new->id])}}" class="text-muted readmore">подробнее <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <div class="author">
                    <small class="text-light user d-block"><i class="mdi mdi-account">{{$new->author}}</i></small>
                    <small class="text-light date"><i class="mdi mdi-calendar-check">{{$new->created_at}}</i></small>
                </div>
            </div>
        </div><!--end col-->
    @endforeach

    <!-- PAGINATION START -->
    <div class="col-12">
        {!! $news->links('inc.paginator') !!}
    </div><!--end col-->
    <!-- PAGINATION END -->

@endsection
