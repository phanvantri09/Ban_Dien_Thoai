<?php
use App\Models\Category;
$ca = Category::all();
?>
@extends('admin.index')
@section('content')
<!-- MAIN CONTENT-->
<div style="display: flex; justify-content: space-between;">
    <h2 class="title-5 m-b-35 bg-primary">Danh sách sản phẩm </h2>
    <a href="{{ route('admin.addProduct')}}"><span class="badge badge-primary"><h4>Thêm</h4></span></a></div>
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá thành/kg</th>
            <th>Loại</th>
            <th>Nội dung</th>
            <th>Ảnh 1</th>
            <th>Ảnh 2</th>
            <th>Ảnh 3</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $book)
        <tr class="tr-shadow">
            <td>{{$book->id}}</td>
            <td><b>{{$book->name}}</b></td>
            <td><b class="text-danger">{{$book->amount}}</b>/kg</td>
            <td><b class="text-warning">{{$book->price}}</b>-$</td>
            <td>
                @foreach ($ca as $item)
                @if($item->id == $book->level)
                {{$item->name}}
                @endif
                @endforeach
            </td>
            <td>{{$book->general}}</td>   
            <td><img src="{{ asset("/imgUploads/$book->img1")}}" alt=""></td>
            <td><img src="{{ asset("/imgUploads/$book->img2")}}" alt=""></td> 
            <td><img src="{{ asset("/imgUploads/$book->img3")}}" alt=""></td>            
            <td>
                <div class="table-data-feature">
                    <a  href="{{route('admin.editProduct',$book->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <a href="{{route('admin.deleteProduct',$book->id)}}" class="item btnDelete"  data-toggle="tooltip" data-placement="top" title="Delete">
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

