
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Sửa Hóa đơn</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.updateBill',$id )}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('PUT') 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên người đặt sản phẩm</label>
                </div>
                <input type="hidden" name="idBill" value="{{$id->id}}">            
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->name}}" name="name" placeholder="Nhập tên người đặt" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Email</label>
                </div>
                <input type="hidden" name="idBill" value="{{$id->id}}">            
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->email}}" name="email" placeholder="Nhập tên người đặt" class="form-control">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tổng tiền</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->price}}" name="price" placeholder="Nhập giá thành sản phẩm trên 1kg" class="form-control">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Số điện thoại</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" value="{{$id->numberPhone}}" name="numberPhone" placeholder="Nhập số lượng đơn vị kg" class="form-control">
                    @error('numberPhone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tổng tiền</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->price}}" name="price" placeholder="Tổng tiền" class="form-control">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Địa chỉ chi tiết</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input"  name="sonha" placeholder="Số nhà" class="form-control">
                    @error('sonha')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" id="text-input"  name="xa" placeholder="xã - thị trấn" class="form-control">
                    @error('xa')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" id="text-input" name="huyen" placeholder="Quận - Huyện" class="form-control">
                    @error('huyen')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" id="text-input"  name="tinh" placeholder="Tỉnh- Thành Phố" class="form-control">
                    @error('tinh')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="hidden" id="text-input" value="{{$id->address}}"  name="address" placeholder="Tỉnh- Thành Phố" class="form-control">
                    <label for="text-input" class=" form-control-label">Địa chỉ lúc đàu: {{$id->address}}</label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();