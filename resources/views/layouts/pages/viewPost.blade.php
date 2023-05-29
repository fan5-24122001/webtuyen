@extends('layouts.master')
@section('content')


    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{asset('user1/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Job Detail</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Job Detail</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Job Detail -->
			<div class="section-full content-inner-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="sticky-top">
								<div class="row">
									<div class="col-lg-12 col-md-6">
										<div class="m-b30">
											<img src="{{asset('user1/images/blog/grid/pic1.jpg')}}" alt="">
										</div>
									</div>
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15">Job Details</h4>
											<ul>
												<li><i class="ti-location-pin"></i><strong class="font-weight-700 text-black">Address</strong><span class="text-black-light"> {{$id->address}}</span></li>
												<li><i class="ti-money"></i><strong class="font-weight-700 text-black">Salary</strong>${{$id->maxMoney}} USA</li>
												<li><i class="ti-shield"></i><strong class="font-weight-700 text-black">Number of Applicants</strong>{{$id->amount}}</li>
											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
                        
						<div class="col-lg-5">
							<div class="job-info-box">
								<h3 class="m-t0 m-b10 font-weight-700 title-head">
									<a href="#" class="text-secondry m-r30">{{$id->title}}</a>
								</h3>
								<ul class="job-info">
									<li><strong>Education</strong> Web Designer</li>
									<li><strong>Deadline:</strong>{{$id->timeEnd}}</li>
								</ul>
	
								<h5 class="font-weight-600">Job Description</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p>{{$id->content}}</p>
                                <h5 class="font-weight-600">Job Open</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<p>{{$id->created_at}}</p>
								<h5 class="font-weight-600">Job Requirements</h5>
								<div class="dez-divider divider-2px bg-gray-dark mb-4 mt-0"></div>
								<ul class="list-num-count no-round">
									
									<li>Time : {{$id->type}}</li>
                                    <li>location : {{$id->location}}</li>
									<li>DexignLab standard dummy text ever since</li>
								</ul>

                                @auth
                                @if (Auth::user()->is_admin == 0)
                                <li>  <a href="{{ route('apply', ['id'=>$id->id]) }}" class="site-button">Apply This Job</a> <span><a  class="site-button" href="{{ route('love', ['post_id'=>$id->id]) }}" class="btn">Love</a></span></li>
                                @if(session()->has('success'))
                              
                                @endif
                        
                                               
                                   @elseif(Auth::user()->is_admin == 2) 
                                            {{-- nhaf tuyeern dung --}}
                                          
                                 @endif
                                
                                    @else                                     
                                <a href="{{ route('login') }}" class="site-button">Apply This Job</a>
                                @endauth
                            
								
							</div>
                            
						</div>
                        <div class="col-lg-4">
							<div class="sticky-top">
								<div class="row">
									
									<div class="col-lg-12 col-md-6">
										<div class="widget bg-white p-lr20 p-t20  widget_getintuch radius-sm">
											<h4 class="text-black font-weight-700 p-t10 m-b15">Company information</h4>
											<ul>
												<li><strong class="font-weight-700 text-black">View Post : {{$id->views}}</strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black">Name Cty : {{$id->name}}</strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black">Mail  : {{$id->email}}</strong><span class="text-black-light"> </span></li>
                                                <li><strong class="font-weight-700 text-black">Phone : {{$id->numberPhone}}</strong><span class="text-black-light"> </span></li>

											</ul>
										</div>
									</div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
            <!-- Job Detail -->
			<!-- Our Jobs -->
	
		</div>
    </div>
    <hr>
@endsection