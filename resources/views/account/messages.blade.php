@extends('layouts.account')

@section('title')
    @parent Сообщения
@endsection

@section('content')
    <div class="col-lg-8 col-12">
        <div class="rounded shadow p-4">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Messages:</h5>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#composemail" class="btn btn-primary"><i data-feather="plus" class="fea icon-sm"></i> Compose</a>
            </div>

            <!-- Modal Content Start -->
            <div class="modal fade" id="composemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content rounded shadow border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">New Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-4">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Name <span class="text-danger">*</span></label>
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Subject</label>
                                            <i data-feather="book" class="fea icon-sm icons"></i>
                                            <input name="subject" id="subject" class="form-control pl-5" placeholder="Your subject :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative mb-0">
                                            <label>Comments</label>
                                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                            </form>
                        </div>
                        <div class="border-top p-4">
                            <button type="button" class="btn btn-primary">Send Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->

            <div class="d-flex border-bottom align-items-center justify-content-between bg-light mt-4 p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="checkAll">
                            <label class="custom-control-label" for="checkAll">Select all</label>
                        </div>
                    </div>
                </div>

                <div class="btn-group dropdown-primary mr-2 mt-2">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                        <a href="javascript:void(0)" class="dropdown-item"><i data-feather="eye-off" class="fea icon-sm"></i> Mark Unread</a>
                        <a href="javascript:void(0)" class="dropdown-item"><i data-feather="corner-up-left" class="fea icon-sm"></i> Reply</a>
                        <a href="javascript:void(0)" class="dropdown-item"><i data-feather="corner-up-right" class="fea icon-sm"></i> Forward</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item text-danger"><i data-feather="trash-2" class="fea icon-sm"></i> Delete</a>
                    </div>
                </div>
            </div>

            <div class="d-flex border-bottom p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail1">
                            <label class="custom-control-label" for="mail1"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/02.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Calvin Carlo</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex border-bottom bg-light p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail2">
                            <label class="custom-control-label" for="mail2"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/02.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Miriam Walya</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex border-bottom p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail3">
                            <label class="custom-control-label" for="mail3"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/03.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Jenelia Parker</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex border-bottom bg-light p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail4">
                            <label class="custom-control-label" for="mail4"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/04.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Jack Deo</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex border-bottom p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail5">
                            <label class="custom-control-label" for="mail5"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/05.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Marya Joseph</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex border-bottom bg-light p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail6">
                            <label class="custom-control-label" for="mail6"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/06.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Maninder Khan</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex border-bottom p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail7">
                            <label class="custom-control-label" for="mail7"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/07.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Pitambar Das</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex border-bottom bg-light p-3">
                <div class="form-check pl-0">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input check" id="mail8">
                            <label class="custom-control-label" for="mail8"></label>
                        </div>
                    </div>
                </div>
                <a href="javascript:void(0)">
                    <div class="media ml-2">
                        <img src="{{asset('/assets/images/client/08.jpg')}}" class="avatar avatar-md-sm rounded-pill shadow" alt="">
                        <div class="content ml-3">
                            <h6 class="text-dark">Cristino Murfy</h6>
                            <p class="text-muted mb-0">This is required when, for example, the final text is not yet available. Dummy</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
                <span class="text-muted h6 mb-0">Showing 8 out of 33</span>
                <a href="javascript:void(0)" class="btn btn-primary">See more</a>
            </div>
        </div>
    </div><!--end col-->
@endsection

