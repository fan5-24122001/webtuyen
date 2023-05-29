@extends('admin.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">

<div class="row page-titles">
    <ol class="breadcrumb">
    <h2 class="title-5 m-b-35 bg-primary">Danh sách bài viết</h2>
    <a href="{{ route('admin.addBlog')}}" class="badge badge-primary"><h4>Thêm</h4></a>
    </ol>
</div>
<!-- row -->


<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Tiêu đề</th>
            <th>Ảnh</th>
            <th>Nội dung</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $book)
        <tr class="tr-shadow">
            <td>{{$book->id}}</td>
            <td><b>{{$book->name}}</b></td> 
            <td><img src="{{ asset("/imgUploads/$book->img")}}" alt=""></td>
        
            
               
                <td>
                                            <div class="d-flex"> 
                                            <a href="{{route('admin.editBlog',$book->id)}}" >
                                                    
                                                        <button type="submit" class="btn btn-danger btn-sm">Sửa</button>
                                                  
                                                </a>   ||   
                                               
                                                    <form method="post" action="{{route('admin.deleteBlog',$book->id)}}">
                                                        @method('delete')
                                                        @csrf
                                                       
                                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                   
                                                      
                                                    </form>
                                              
                                            </div>
                                        </td>
           
        </tr>
        <tr class="spacer"></tr>
        @endforeach
    </tbody>
</table>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<div>
    {{$data->appends(request()->all())->links()}}
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@stop();
