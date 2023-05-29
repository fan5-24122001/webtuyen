@extends('layouts.master')
@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle"
        style="background-image:url({{asset('user1/imagesbanner/bnr1.jpg')}});">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h1 class="text-white">Browse Jobs</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="#">Home</a></li>
                        <li>Browse Jobs</li>
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
                    <div class="col-xl-9 col-lg-8">
                        <h5 class="widget-title font-weight-700 text-uppercase">Recent Jobs</h5>


                     
                        <ul class="post-job-bx">
                       
                                    @foreach ($data as $item)

                                    @if($item->status == 0)

                                    @endif
                                    @if($item->status == 1)
                                    <li>
                                        <a href="{{ route('viewPost', ['id'=>$item->id]) }}">
                                            <div class="d-flex m-b30">
                                                <div class="job-post-company">
                                                     <span><img src="{{asset('user1/images/logo/icon1.png')}}" /></span>
                                                </div>
                                                <div class="job-post-info">
                                                    <h4>{{$item->title}}</h4>
                                                    <ul>
                                                    <li><i class="fa fa-map-marker"></i>{{$item->address}}</li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="job-time mr-auto">

                                                    <span> {{$item->type}}</span>


                                                </div>
                                                <div class="salary-bx">
                                                    <span>${{$item->minMoney}}.USD - ${{$item->maxMoney}}.USD</span>
                                                </div>
                                            </div>
                                            <span class="post-like fa fa-heart-o"></span>
                                        </a>
                                    </li>
                                    @endif

                                    @endforeach
                        </ul>

                        <div class="pagination-bx m-t30">
                            <ul class="pagination">
                                <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="sticky-top">
                            <div class="clearfix m-b30">
                                <h5 class="widget-title font-weight-700 text-uppercase">Keywords</h5>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <div class="clearfix">
                                <h5 class="widget-title font-weight-700 text-uppercase">Sort</h5>
                               
                                <div class="clearfix">
                                            <span><a href="{{ URL::to('sorta') }}" style="color: black"> Sắp Xếp Lương Cao - Thấp </a></span><br>
                                            <span><a href="{{ URL::to('sortprice1') }}" style="color: black">  Sắp Xếp Lương Thấp - Cao </a></span>
                                           
                                </div>
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