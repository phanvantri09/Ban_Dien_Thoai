@extends('admin.index')
@section('content')
<!-- MAIN CONTENT-->
<div style="display: flex; justify-content: space-between;">
    <h2 class="title-5 m-b-35 bg-primary">Danh sách các đơn đã giao </h2>
</div>
    <div style="display: flex; justify-content: space-between;">
        <h2 class="title-5 m-b-35 bg-primary">Tổng doanh thu hiện tại: <span class="text-danger">{{$total}}</span> vnĐ</h2>
    </div>
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Người đặt</th>
            <th>Email</th>
            <th>Tổng tiền</th>
            <th>Địa chỉ</th>
            <th>Số Điện thoại</th>
            <th>Hành Động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $book)
        <tr class="tr-shadow">
            <td>{{$book->id}}</td>
            <td><b>{{$book->name}}</b></td>
            <td><b class="text-danger">{{$book->email}}</b></td>
            <td><b class="text-warning">{{$book->price}}</b> vnĐ</td>
            <td>{{$book->address}}</td>   
            <td>{{$book->numberPhone}}</td>   
            <td>
                <div class="table-data-feature">
                    <a  href="{{route('admin.editBill',$book->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Sửa">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <a href="{{route('admin.deleteBill',$book->id)}}" class="item btnDelete"  data-toggle="tooltip" data-placement="top" title="Xóa">
                        <i  class="zmdi zmdi-delete text-danger"></i>
                    </a>
                    @if (!empty($book->idUser))
                    <a  href="{{route('admin.sanpham',[$book->id,$book->idUser] )}}" class="item btnView" data-toggle="tooltip" data-placement="top" title="Xem sản phẩm">
                        <i class="zmdi zmdi-shopping-cart text-warning"></i>
                    </a>
                    @endif
                    <a href="{{route('admin.changeBill',$book->id)}}" class="item btnchage "  data-toggle="tooltip" data-placement="top" title="Đã giao">
                        <i class="zmdi zmdi-badge-check text-success"></i>
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
@stop()

