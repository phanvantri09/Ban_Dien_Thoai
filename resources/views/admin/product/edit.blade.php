<?php
use App\Models\Category;
$ca = Category::all();
?>
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Sửa Sản Phẩm</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.updateProduct',$id )}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('PUT') 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên sản phẩm</label>
                </div>
                <input type="hidden" name="idProduct" value="{{$id->id}}">
                <input type="hidden" name="img11" value="{{$id->img1}}">
                <input type="hidden" name="img12" value="{{$id->img2}}">
                <input type="hidden" name="img13" value="{{$id->img3}}">
                
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->name}}" name="name" placeholder="Nhập tên sản phẩm" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Số lượng theo kg</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" value="{{$id->amount}}" name="amount" placeholder="Nhập số lượng đơn vị kg" class="form-control">
                    @error('amount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Giá thành sản phẩm trên 1kg</label>
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
                    <label for="select" class=" form-control-label">Loại sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="level" id="select" class="form-control">
                        @foreach ($ca as $item)
                        @if($item->id == $id->level)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                        @endforeach
                        @foreach ($ca as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Thông tin sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="general" id="textarea-input" rows="9" placeholder="Nhập thông tin sản phẩm" class="form-control">{{$id->general}}</textarea>
                    @error('general')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 1</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img1" class="form-control-file">
                    @error('img1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <img src="{{ asset("/imgUploads/$id->img1")}}" alt="">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 2</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img2" class="form-control-file">
                    @error('img2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <img src="{{ asset("/imgUploads/$id->img2")}}" alt="">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 3</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img3" class="form-control-file">
                    @error('img3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <img src="{{ asset("/imgUploads/$id->img3")}}" alt="">
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