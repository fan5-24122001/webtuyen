@extends('layouts.master')
@section('content')
    <?php
    use App\Models\categoryModel;
    $types = ['Full time', 'Part time', 'Remote', 'Freelance'];
    $type = explode(',', $id->type);
    $types = array_diff($types, $type);
    $locations = ['Intern', 'Fresher', 'Junior', 'Middel', 'Leader'];
    $location = explode(',', $id->location);
    $locations = array_diff($locations, $location);
    $skillll = categoryModel::all();
    $skills = categoryModel::all();
    $dataSkill = [];
    foreach ($skills as $key => $value) {
        array_push($dataSkill, $value->id);
    }
    $skill = explode(',', $id->skill);
    $skills = array_diff($dataSkill, $skill);
    ?>
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
                <h3 class="mb-30">Sửa Bài Đăng{{ $id->title }}</h3>
                        <form action="{{ route('PostEdit') }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('POST')
                            <input type="hidden" name="id" value="{{ $id->id }}" value="1">
                            <div class="mt-10 row">
                                <div class="col-4">
                                    <span class="mb-30">Thời Gian Làm Việc </span>
                                    @foreach ($type as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="type[]" type="checkbox"
                                                value="{{ $item }}" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $item }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @foreach ($types as $ty)
                                        <div class="form-check">
                                            <input class="form-check-input" name="type[]" type="checkbox"
                                                value="{{ $ty }}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $ty }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-4">
                                    <span class="mb-30">Danh Mục</span>
                                    @foreach ($skill as $item)
                                        <div class="form-check">
                                            @foreach ($skillll as $sk)
                                                @if ($item == $sk->id)
                                                    <input class="form-check-input" name="skill[]" type="checkbox"
                                                        value="{{ $item }}" id="flexCheckDefault" checked>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $sk->name }}
                                                    </label>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endforeach
                                    @foreach ($dataSkill as $sk)
                                        <div class="form-check">
                                            @foreach ($skillll as $skk)
                                                @if ($sk == $skk->id)
                                                    <input class="form-check-input" name="skill[]" type="checkbox"
                                                        value="{{ $sk }}" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $skk->name }}
                                                    </label>
                                                @endif
                                            @endforeach

                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-4">
                                    <span class="mb-30">Vị Trí Đăng Tuyển</span>
                                    @foreach ($location as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="location[]" type="checkbox"
                                                value="{{ $item }}" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $item }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @foreach ($locations as $l)
                                        <div class="form-check">
                                            <input class="form-check-input" name="location[]" type="checkbox"
                                                value="{{ $l }}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $l }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="mt-10">
                            <label>Tên Cty</label>
                                <input type="text" name="name" class="form-control" value="{{ $id->name }}" placeholder="Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required=""
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                          
                                <input type="hidden" name="id_user"  class="form-control" value="{{ $id->id_user }}">
                            </div>
                            <div class="mt-10">
                            <label>Địa Chỉ Email</label>
                                <input type="email" name="email"  class="form-control" value="{{ $id->email }}" placeholder="Email address"
                                    onfocus="this.placeholder = ''"   class="form-control"onblur="this.placeholder = 'Email address'" required=""
                                    class="single-input">
                            </div>
                            
                            <div class="mt-10">
                            <label>Phone</label>
                                <input type="text"  class="form-control" name="numberPhone" value="{{ $id->numberPhone }}"
                                    placeholder="Number Phone" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email address'" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                            <label>Địa Chỉ Cty</label>
                                <input type="text"  class="form-control" name="address" value="{{ $id->address }}" placeholder="Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required=""
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                            <label>Số Lượng</label>
                                <input type="number" class="form-control" name="amount" value="{{ $id->amount }}" placeholder="Amount apply"
                                    required="" class="single-input">
                            </div>
                            <div class="mt-10">
                            <label>Tiền Thấp Nhất</label>
                                <input type="number" class="form-control" name="minMoney" value="{{ $id->minMoney }}"
                                    placeholder="Min Money apply" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                            <label>Tiền Cao Nhất</label>
                                <input type="number" class="form-control" name="maxMoney" value="{{ $id->maxMoney }}"
                                    placeholder="Max Money apply" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                            <label>Tên Bài Viết</label>
                                <input type="text" class="form-control" name="title" value="{{ $id->title }}" placeholder="Title" required=""
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                            <label>Content</label>
                                <textarea  class="form-control" name="content" placeholder="Content" required="">{{ $id->content }}</textarea>
                            </div>
                            <div class="mt-10">
                          
                            <label>Ngày Kết Thúc</label>    
                                <input  class="form-control" type="date" name="timeEnd" class="form-control" value="{{ $id->timeEnd }}" placeholder=" nhập ngày kết thúc : 2022-12-04" id="mdate" required data-dtp="dtp_HwDDi">
                          
                        </div>
                            <div class="mt-10">
                                <button type="submit" class="site-button">Cập nhật</button>
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
