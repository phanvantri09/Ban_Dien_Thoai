
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Thêm Sản Phẩm</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.postaddBlog')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
           @csrf 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tiêu Đề</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="name" placeholder="Nhập" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh </label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img" class="form-control-file">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Nhập Nội Dung</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="content" id="textarea-input" rows="9" placeholder="Nhập" class="form-control"></textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Tạo
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();