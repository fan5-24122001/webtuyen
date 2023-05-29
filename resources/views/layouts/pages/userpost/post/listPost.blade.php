@extends('layouts.master')
@section('content')
<div class="content-block" style="margin-bottom:200px">>
        <!-- Browse Jobs -->
        <div class="section-full bg-white browse-job content-inner-2">
<div class="container">
    <div class="section-top-border">
        <h3 class="mb-30">Danh Sách Bài Đăng</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Bài Viết</th>
                        <th>Ngày Kết Thúc</th>
                        <th>Số Lượng</th>
                        <th>Trạng Thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key++ }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->timeEnd }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>
                            @if ($item->status == 0)
                            Chưa Duyệt
                            @elseif ($item->status == 1)
                            Đã Duyệt
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('PostDelete', ['id' => $item->id]) }}" class="btn btn-danger btn-sm">Xóa</a>
                            <a href="{{ route('showapplypost', ['id' => $item->id]) }}" class="btn btn-danger btn-sm">Kiểm Tra</a>
                            <a href="{{ route('PEdit', ['id' => $item->id]) }}" class="btn btn-danger btn-sm">Sửa</a>
                            <a href="{{ route('viewPost', ['id' => $item->id]) }}" class="btn btn-danger btn-sm">Xem</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
@endsection
