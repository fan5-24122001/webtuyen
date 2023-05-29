
<header class="site-header mo-left header fullwidth">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a><img src="{{asset('user1/images/logo.png')}}" class="logo" alt=""></a>
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
                    <div class="extra-cell">
                    
                    @if (Auth::user()->is_admin == 0)
                                {{-- usser --}}
                                <a href="{{ URL::to('/profile/show') }}" class="site-button"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                                @elseif(Auth::user()->is_admin == 2)
                                {{-- nhaf tuyeern dung --}}
                                <a href="{{ URL::to('/profile/show') }}" class="site-button"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                              
                                @endif
                    </div>

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
                        <li >
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