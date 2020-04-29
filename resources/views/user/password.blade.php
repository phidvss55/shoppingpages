@extends('user.layout')
@section('content')

    <h1 class="page-header"> Cập nhật mật khẩu </h1>
   <div class="row">
       <div class="col-sm-12">
           <form action="" method="POST" enctype="multipart/form-data" class="pwd-change">
            @csrf
                <div class="form-group">
                    <label for="password_old"> Mật khẩu cũ </label>
                    <input type="password" name="password_old" class="form-control" placeholder=" Mật khẩu cũ... ">
                    <a href="javascript:void(0)" class="see-pwd"><i class="fa fa-eye"></i></a>
                    @if( $errors->has('password_old'))
                        <span class="error-text">
                            {{ $errors->first('password_old') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password"> Mật khẩu mới </label>
                    <input type="password" name="password" class="form-control" placeholder=" Mật khẩu mới ... ">
                    <a href="javascript:void(0)" class="see-pwd"><i class="fa fa-eye"></i></a>
                    @if( $errors->has('password'))
                        <span class="error-text">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password_confirm"> Xác nhận mật khẩu mới </label>
                    <input type="password" name="password_confirm" class="form-control" placeholder=" Xác nhận lại mật khẩu ... ">
                    <a href="javascript:void(0)" class="see-pwd"><i class="fa fa-eye"></i></a>
                    @if( $errors->has('password_confirm'))
                        <span class="error-text">
                            {{ $errors->first('password_confirm') }}
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật </button>
           </form>
       </div>
   </div>
@stop