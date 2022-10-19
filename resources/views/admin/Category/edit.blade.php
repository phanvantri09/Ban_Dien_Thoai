
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Sửa Loại Sản Phẩm</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.updateCategory',$id )}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('PUT') 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên loại sản phẩm</label>
                </div>
                <input type="hidden" name="idProduct" value="{{$id->id}}">
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->name}}" name="name" placeholder="Nhập tên loại sản phẩm" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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