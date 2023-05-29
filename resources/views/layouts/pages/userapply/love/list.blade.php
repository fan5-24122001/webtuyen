@extends('layouts.master')
@section('content')
<div class="section-full bg-white browse-job content-inner-2" style="margin-bottom:80px">
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30">Danh Sách Yêu Thích</h3>
                <div class="progress-table-wrap">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Tiêu Đề</th>
                                    <th>Số Lượng</th>
                                    <th>Trạng Thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $da)
                                @foreach ($post as $item)
                                    @if ($da->post_id == $item->id)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->amount}}</td>
                                        <td>
                                            <a href="{{ route('deletelove', ['id'=>$da->id]) }}" class="btn btn-danger btn-sm">Xóa</a>
                                            <a href="{{ route('viewPost', ['id' => $item->id]) }}" class="btn btn-danger btn-sm">Xem</a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection