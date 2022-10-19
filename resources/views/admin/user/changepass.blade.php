
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Đổi mật khẩu</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.postchangepass',$id->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Mật khẩu hiện tại</label>
                </div>     
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="passold" placeholder="Nhập " class="form-control">
                    @error('passold')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Mật khẩu Mới</label>
                </div>     
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="passnew" placeholder="Nhập " class="form-control">
                    @error('passnew')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Đổi
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();