@extends('admin.index')
@section('content')
<!-- MAIN CONTENT-->
<div style="display: flex; justify-content: space-between;">
    <h2 class="title-5 m-b-35 bg-primary">Danh sách bài viết (thức ăn công nghiệp) </h2>
    <a href="{{ route('admin.addBlog')}}"><span class="badge badge-primary"><h4>Thêm</h4></span></a></div>
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Tiêu đề</th>
            <th>Ảnh</th>
            <th>Nội dung</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $book)
        <tr class="tr-shadow">
            <td>{{$book->id}}</td>
            <td><b>{{$book->name}}</b></td> 
            <td><img src="{{ asset("/imgUploads/$book->img")}}" alt=""></td>
            <td><b>{{$book->content}}</b></td>   
            <td>
                <div class="table-data-feature">
                    <a  href="{{route('admin.editBlog',$book->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <a href="{{route('admin.deleteBlog',$book->id)}}" class="item btnDelete"  data-toggle="tooltip" data-placement="top" title="Delete">
                        <i  class="zmdi zmdi-delete text-danger"></i>
                    </a>
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

