@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.category') }}"> Danh mục </a></li>
            <li class="active"> Thêm mới </li>
        </ol>
    </div>
    <div class="">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="name"> Tên danh mục </label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder=" Tên danh mục ... ">
                @if($errors->has('name'))
                    <div class="error-text">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="icon"> Icon </label>
                <input type="text" id="icon" name="icon" class="form-control" value="{{ old('icon') }}" placeholder=" fa fa-home ">
                @if($errors->has('icon'))
                    <div class="error-text">
                        {{ $errors->first('icon') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Meta title </label>
                <input type="text" id="c_title_seo" name="c_title_seo" class="form-control" value="{{ old('c_title_seo') }}" placeholder=" Meta title ... ">
            </div>
            <div class="form-group">
                <label for="name"> Meta description </label>
                <input type="text" id="c_description_seo" name="c_description_seo" class="form-control" value="{{ old('c_description_seo') }}" placeholder=" Meta description ... ">            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label for=""><input type="checkbox" name="hot"> Nổi bật </label>
                </div>
            </div>
            <button class="btn btn-success" type="submit"> Lưu thông tin </button>
        </form>
    </div>  
@stop