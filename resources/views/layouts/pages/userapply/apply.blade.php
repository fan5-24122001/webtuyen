@extends('layouts.master')
@section('content')
<div class="page-content bg-white" style="margin-bottom:200px">>
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle"
        style="background-image:url({{asset('user1/imagesbanner/bnr1.jpg')}});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Ung Tuyển Lý Bài Tuyển Dụng</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Ung Tuyển Lý Bài Tuyển Dụng</li>
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
                <h2 class="contact-title"> Ung Tuyển Lý Bài Tuyển Dụng</h2>
            </div>
            
            <div class="col-lg-8">
            <div class="section-full bg-white submit-resume content-inner-2">
				<div class="container">
                <form action="{{ route('postApply') }}"  method ="POST" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="mt-10">
                        <label>Name Của Bạn</label>
                            <input type="text"class="form-control" name="name"  placeholder="Nhập Tên Của Bạn" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
                        </div>
                        <div class="mt-10">

                            <input type="hidden"class="form-control" name="id_post"  value="{{$id}}">
                        </div>
                        <div class="mt-10">
                        <label>Email Của Bạn</label>
                            <input type="email" class="form-control"name="email" placeholder="Nhập Địa Chỉ Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                        <label>Phone Của Bạn</label>
                            <input type="text" class="form-control"name="numberPhone" placeholder="Nhập Số Điện Thoại" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <label for="">Nộp CV Vào</label>
                            <input class="form-control" type="file" name="fileCV" class="single-input">
                        </div>
                        <hr>
                        <div class="mt-10">
                            <button type="submit"  class="site-button">Ứng Tuyển  </button>
                        </div>
                    </form>
				</div>
</div>
            </div>
           

                 
                </div>
            </div>
        </div>
        <!-- Browse Jobs END -->
    </div>
</div>


@endsection