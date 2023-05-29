@extends('layouts.master')
@section('content')
<div class="page-content bg-white" style="margin-bottom:200px">>
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle"
        style="background-image:url({{asset('user1/imagesbanner/bnr1.jpg')}});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Quản Lý Bài Tuyển Dụng</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Quản Lý Bài Tuyển Dụng</li>
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
                <h2 class="contact-title"> Quản Lý Bài Tuyển Dụng</h2>
            </div>
            
            <div class="col-lg-8">
            <div class="section-full bg-white submit-resume content-inner-2">
				<div class="container">
                <form action="{{ route('PostDataPost') }}"  method ="POST" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="mt-10 row">
                            <div class="col-4">
                                <span class="mb-30"> Thời Gian Làm Việc</span>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Full time" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    Full time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Part time" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Part time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Remote" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remote
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="type[]" type="checkbox" value="Freelance" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Freelance
                                    </label>
                                </div>
                            </div >
                                <div class="col-4">
                                    <span class="mb-30"> Danh Mục</span>
                                    <div class="default-select" id="default-select"  "="">
                                        @foreach ($category as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="skill[]" type="checkbox" value="{{$item->id}}" id="flexCheckChecked" >
                                            <label class="form-check-label" for="flexCheckChecked">
                                                {{$item->name}}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                              
                                <div class="col-4">
                                    <span class="mb-30"> Vị Trí Tuyển</span>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Intern" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Intern
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Fresher" id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Fresher
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Junior" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Junior
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Middel"  id="flexCheckChecked" >
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Middel
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Leader" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Leader
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="location[]" type="checkbox" value="Full Level" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Full Level
                                        </label>
                                    </div>
                                </div>
                            </div>
                          
                        <div class="mt-10">
                        <label>Tên Cty</label>
                            <input type="text"  class="form-control" name="name" placeholder="Nhập Tên Cty" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên công ty'" required="" class="single-input">
                        </div>
                        
                        <div class="mt-10">
                        <label>Địa Chỉ Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Nhập Địa Chỉ Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ email'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                        <label>Phone</label>
                            <input type="text"  class="form-control" name="numberPhone" placeholder=" Nhập Số Điện Thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập số điện thoại'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                        <label>Địa Chỉ Cty</label>
                            <input type="text"  class="form-control" name="address" placeholder="Địa Chỉ Cty Của Bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                        <label>Số Lượng</label>
                            <input type="number" class="form-control" name="amount" placeholder=" Số Lượng Thành Viên Muốn Tuyển Dụng"  required="" class="single-input">
                        </div>
                         <div class="mt-10">
                        <label>Tiền Thấp Nhất</label>
                            <input type="number" class="form-control" name="minMoney" placeholder="Số Tiền Thấp Nhấp" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                        <label>Tiền Cao Nhất</label>
                            <input type="number" class="form-control" name="maxMoney" placeholder="Số Tiền Cao Nhất" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                        <label>Tên Bài Viết</label>
                            <input type="text" class="form-control" name="title" placeholder=" Nhập Tên Hiển Thị"  required="" class="single-input">
                        </div>
                        <div class="mt-10">
                        <label>Content</label>
                            <textarea class="form-control" name="content"  placeholder="Nhập Thông Tin Bài Viết" required=""></textarea>
                        </div>
                        <div class="mt-10">
                        <label>Ngày Kết Thúc</label>
                          
                               
                                <input type="date" name="timeEnd" class="form-control" placeholder=" nhập ngày kết thúc : 2022-12-04" id="mdate" required data-dtp="dtp_HwDDi">
                          
                        </div>
                        <br>
                        <div class="mt-10">
                        
                            <button type="submit" class="site-button" >Đăng bài</button>
                        </div>
                    </form>
				</div>
</div>
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