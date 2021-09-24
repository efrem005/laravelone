@extends('layouts.account')

@section('title')
    @parent Профиль
@endsection

@section('content')
    <div class="col-lg-8 col-12">
        <div class="border-bottom pb-4">
            <h5>Krista Joseph</h5>
            <p class="text-muted mb-0">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
        </div>

        <div class="border-bottom pb-4">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <h5>Personal Details :</h5>
                    <div class="mt-4">
                        <div class="media align-items-center">
                            <i data-feather="mail" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Email :</h6>
                                <a href="javascript:void(0)" class="text-muted">kristajoseph0203@mail.com</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <i data-feather="bookmark" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Skills :</h6>
                                <a href="javascript:void(0)" class="text-muted">html</a>, <a href="javascript:void(0)" class="text-muted">css</a>, <a href="javascript:void(0)" class="text-muted">js</a>, <a href="javascript:void(0)" class="text-muted">mysql</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <i data-feather="italic" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Language :</h6>
                                <a href="javascript:void(0)" class="text-muted">English</a>, <a href="javascript:void(0)" class="text-muted">Japanese</a>, <a href="javascript:void(0)" class="text-muted">Chinese</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <i data-feather="globe" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Website :</h6>
                                <a href="javascript:void(0)" class="text-muted">www.kristajoseph.com</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <i data-feather="gift" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Birthday :</h6>
                                <p class="text-muted mb-0">2nd March, 1996</p>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <i data-feather="map-pin" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Location :</h6>
                                <a href="javascript:void(0)" class="text-muted">Beijing, China</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <i data-feather="phone" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Cell No :</h6>
                                <a href="javascript:void(0)" class="text-muted">(+12) 1254-56-4896</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 mt-4 pt-2 pt-sm-0">
                    <h5>Experience :</h5>

                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                        <img src="{{asset('/assets/images/job/Circleci.svg')}}" class="avatar avatar-ex-sm" alt="">
                        <div class="media-body content ml-3">
                            <h4 class="title mb-0">Senior Web Developer</h4>
                            <p class="text-muted mb-0">3 Years Experience</p>
                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">CircleCi</a> @London, UK</p>
                        </div>
                    </div>

                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                        <img src="{{asset('/assets/images/job/Codepen.svg')}}" class="avatar avatar-ex-sm" alt="">
                        <div class="media-body content ml-3">
                            <h4 class="title mb-0">Web Designer</h4>
                            <p class="text-muted mb-0">2 Years Experience</p>
                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Codepen</a> @Washington D.C, USA</p>
                        </div>
                    </div>

                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                        <img src="{{asset('/assets/images/job/Gitlab.svg')}}" class="avatar avatar-ex-sm" alt="">
                        <div class="media-body content ml-3">
                            <h4 class="title mb-0">UI Designer</h4>
                            <p class="text-muted mb-0">2 Years Experience</p>
                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Gitlab</a> @Perth, Australia</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>

        <h5 class="mt-4 mb-0">Posts & News :</h5>
        <div class="row">
            <div class="col-md-6 mt-4 pt-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative">
                        <img src="{{asset('/assets/images/blog/01.jpg')}}" class="card-img-top rounded-top" alt="...">
                        <div class="overlay rounded-top bg-dark"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>
                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                            </ul>
                            <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                        <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-6 mt-4 pt-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative">
                        <img src="{{asset('/assets/images/blog/02.jpg')}}" class="card-img-top rounded-top" alt="...">
                        <div class="overlay rounded-top bg-dark"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>
                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                            </ul>
                            <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                        <small class="text-light date"><i class="mdi mdi-calendar-check"></i> 13th August, 2019</small>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-12 mt-4 pt-2">
                <a href="page-blog-grid.html" class="btn btn-primary">See More <i class="mdi mdi-chevron-right"></i></a>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end col-->
@endsection

