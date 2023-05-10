
<header class="site-header mo-left header fullwidth">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="index-2.html"><img src="{{asset('user1/images/logo.png')}}" class="logo" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">

                    @guest
                    @if (Route::has('login'))
                    <div class="extra-cell">
                        <a href="{{ route('register') }}" class="site-button"><i class="fa fa-user"></i> Sign Up</a>
                        <a href="{{ route('login') }}" class="site-button"><i class="fa fa-lock"></i> login</a>
                    </div>
                 
                    @endif
                    @else
                    <!-- <div class="main-menu">
                        <nav class="d-none d-lg-block">
                            <ul id="navigation">
                                @if (Auth::user()->is_admin == 0)
                                {{-- usser --}}
                                <li><a href=""> <img src="{{ asset('admin/images/profile/pic1.jpg') }}" width="40"
                                            alt=""> {{ Auth::user()->name }}</a>
                                    <ul class="submenu">
                                        <li><a href="{{ URL::to('/profile/show') }}"> Thông Tin Của Bạn</a>
                                        </li>
                                        <li><a href="{{ URL::to('/love/show') }}"> Yêu Thích</a></li>


                                        <li><a href="{{ URL::to('/Show-Apply') }}">Đã Ứng Tuyển</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
                                        </li>
                                    </ul>
                                </li>
                                @elseif(Auth::user()->is_admin == 2)
                                {{-- nhaf tuyeern dung --}}
                                <li><a href=""> <img src="{{ asset('admin/images/profile/pic1.jpg') }}" width="40"
                                            alt=""> {{ Auth::user()->name }}</a>
                                    <ul class="submenu">
                                        <li><a href="{{ URL::to('/profile/show') }}"> Thông Tin Của Bạn</a>
                                        </li>
                                        <li><a href="{{ route('PostAdd') }}">Đăng Bài Tuyển Dụng</a></li>
                                        <li><a href="{{ route('PostList') }}">QLý Bài Tuyển Dụng</a></li>

                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
                                        </li>
                                    </ul>
                                </li>
                                @endif


                            </ul>
                        </nav>
                    </div>
 -->




                    @endguest

                </div>
                <!-- Quik search -->
                <div class="dez-quik-search bg-primary">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span id="quik-search-remove"><i class="flaticon-close"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{ URL::to('/home') }}">Home </a>

                        </li>
                        <li>
                            <a href="{{ URL::to('/Post') }}"> Bài Viết</a>

                        </li>
                        <li>
                            <a href="#"> Tin Tức</a>

                        </li>
                        <li>
                            <a href="#">Tạo Cv</a>

                        </li>
                        <li>
                            <a href="{{ URL::to('/about') }}"> Liên Hệ </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>