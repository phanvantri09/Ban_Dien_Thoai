
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Sửa Blog (thức ăn công nghiệp)</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.updateBlog',$id )}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('PUT') 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tiêu Đề</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="hidden" name="idProduct" value="{{$id->id}}">
                    <input type="text" id="text-input" value="{{$id->name}}" name="name" placeholder="Nhập" class="form-control">
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
                    <input type="hidden" name="img11" value="{{$id->img}}">
                    <input type="file" id="file-input" name="img" class="form-control-file">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <img src="{{ asset("/imgUploads/$id->img")}}" alt="">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Nhập Nội Dung</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="content" id="textarea-input" rows="9" placeholder="Nhập" class="form-control">{{$id->content}}</textarea>
                    @error('content')
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