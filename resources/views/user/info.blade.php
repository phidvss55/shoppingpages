@extends('user.layout')
@section('content')

    <h1 class="page-header"> Cập nhật thông tin </h1>
   <div class="row">
       <div class="col-sm-12">
           <form action="" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" name="email" disabled class="form-control" placeholder=" Email ... " value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="name"> Họ tên </label>
                    <input type="text" name="name" class="form-control" placeholder=" Họ và tên ... " value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="phone"> Số điện thoại </label>
                    <input type="number" name="phone" class="form-control" placeholder=" Số điện thoại ... " value="{{ $user->phone }}">
                </div>
                <div class="form-group">
                    <label for="address"> Địa chỉ </label>
                    <input type="text" name="address" class="form-control" placeholder=" Địa chỉ ... " value="{{ $user->address }}">
                </div>
                <div class="form-group">
                    <label for="about"> Họ tên </label>
                    <textarea cols="30" rows="4" type="text" name="about" class="form-control" placeholder=" Giới thiệu bản thân ... " >{{ $user->about }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật </button>
           </form>
       </div>
   </div>

@stop