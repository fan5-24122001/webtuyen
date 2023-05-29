@extends('layouts.master')
@section('content')

<div class="content-block" style="margin-bottom:200px">
        <!-- Browse Jobs -->
        <div class="section-full bg-white browse-job content-inner-2">
<div class="container">
  
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ và Tên</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">CV</th>
                    <th scope="col">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @if ($data->isNotEmpty())
                    @foreach ($data as $key => $item)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->numberPhone }}</td>
                            <td>
                                <a href='{{ asset("/fileUploads/$item->fileCV") }}'><strong style="color: black">Xem CV</strong></a>
                            </td>
                            <td>
                                <a href="{{ route('deleteapply', ['id'=>$item->id]) }}">
                                    <button class="btn btn-danger btn-sm">Xóa</button>
                                </a>
                                @auth
                                    @if (Auth::user()->is_admin == 2)
                                        <a href="{{ route('email', ['id'=>$item->id]) }}">
                                            <button class="btn btn-danger btn-sm">Gửi Mail</button>
                                        </a>
                                    @elseif(Auth::user()->is_admin == 0)
                                        <a href="{{ route('viewPost', ['id' => $item->id_post]) }}">
                                            <button class="btn btn-danger btn-sm">Xem Thông Tin Bài Viết</button>
                                        </a>
                                    @endif
                                @endauth
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">
                            <div class="featured__item__text">
                                <h5>Không tìm thấy ứng cử viên apply</h5>
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
</div >
@endsection
