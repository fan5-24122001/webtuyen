
@extends('layouts.master')
@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle"
        style="background-image:url({{asset('user1/imagesbanner/bnr1.jpg')}});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">information</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>information</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <!-- Browse Jobs -->
        <div class="section-full bg-white browse-job content-inner-2">
            <div class="container">
            <div class="row">
            <div class="col-12">
                <h2 class="contact-title"> Your information</h2>
            </div>
            
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('editprofile') }}" method="post"  >
                    @csrf
                    <div class="row">
                        <input class="form-control valid"  id="name" name="id" value="{{$user->id}}" type="hidden" >
                        <div class="col-sm-12">
                            <label for="email" class="col-md-4 ">{{ __('Email') }}</label>
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="name" value="{{$user->email}}" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="email" class="col-md-4 ">{{ __('Name') }}</label>
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" value="{{$user->name}}" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="email" class="col-md-4 ">{{ __('Level') }}</label>
                            <div class="form-group">
                                @if ($user->is_admin==0)
                                <label>User </label>
                                <input class="form-control valid"  id="name" name="is_admin" value="{{$user->is_admin}}" type="hidden" >
                                @elseif ($user->is_admin==2)
                                <label>Nhà Tuyển Dụng </label>
                                <input class="form-control valid"  id="name" name="is_admin" value="{{$user->is_admin}}" type="hidden" >
                                @endif
                            </div>
                        </div>
                    </div>
                    
                        <button type="submit"
                        class="btn btn-danger btn-sm">Cập nhật</button>
                    
                </form>
            </div>
           

                    <div class="col-xl-3 col-lg-4">
                    @if (Auth::user()->is_admin == 0)
                    <a href="{{ URL::to('/profile/show') }}" class="site-button"><i class="fa fa-user"></i> Your information</a><hr>
                    <a href="{{ URL::to('/love/show') }}" class="site-button"><i class="fa fa-user"></i> Love</a><hr>
                    <a href="{{ URL::to('/Show-Apply') }}" class="site-button"><i class="fa fa-user"></i> Đã ứng tuyển </a><hr>
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                                                    class="text-danger" width="18" height="18" viewbox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                                    </path>
                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                                </svg>
                                                <span>
                                                    {{ __('Logout') }}
                                                </span>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </a>
                    
                    @elseif(Auth::user()->is_admin == 2)

                    <a href="{{ URL::to('/profile/show') }}" class="site-button"><i class="fa fa-user"></i> Thông Tin Của Bạn </a><hr>
                    <a href="{{ route('PostAdd') }}" class="site-button"><i class="fa fa-user"></i> Đăng Bài Tuyển Dụng</a><hr>
                    <a href="{{ route('PostList') }}" class="site-button"><i class="fa fa-user"></i> QLý Bài Tuyển Dụng</a><hr>
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg"
                                                    class="text-danger" width="18" height="18" viewbox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                                    </path>
                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                                </svg>
                                                <span>
                                                    {{ __('Logout') }}
                                                </span>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Browse Jobs END -->
    </div>
</div>
@endsection