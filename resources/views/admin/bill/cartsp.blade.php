@extends('admin.index')
@section('content')
<!-- MAIN CONTENT-->
<div style="display: flex; justify-content: space-between;">
    <h2 class="title-5 m-b-35 bg-primary">Danh sách sản phẩm </h2>
    <a href="{{ route('admin.addProduct')}}"><span class="badge badge-primary"><h4>Thêm</h4></span></a>
</div>
<div style="display: flex; justify-content: space-between;">
    <h3>Tổng tiền: <b class="text-danger">{{$total}} vnĐ</b></h3>
    <a href="{{ route('admin.changeBill',$id)}}"><span class="badge badge-success"><h4>Xác nhận đã giao</h4></span></a>
</div>
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá thành/kg</th>
            <th>Tổng tiền</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $book)
        @foreach ($products as $item)
            @if ($book->idProduct==$item->id)
            <tr class="tr-shadow">
                <td>{{$book->id}}</td>
                <td><b>{{$item->name}}</b></td>
                <td><b class="text-danger">{{$book->amount}}</b>/kg</td>
                <td><b class="text-primary">{{$item->price}}</b>vnĐ</td>    
                <td><b class="text-warning">{{$item->price * $book->amount}} vnĐ</b></td>
            </tr>
            <tr class="spacer"></tr>
            @endif
        @endforeach
        @endforeach
    </tbody>
</table>

<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@stop();

