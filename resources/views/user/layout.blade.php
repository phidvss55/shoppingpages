<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        
        <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/dashboard/">

        <title> Quản lý cho người dùng </title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('theme_admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="{{ asset('theme_admin/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset('theme_admin/css/dashboard.css') }}" rel="stylesheet">
        <!-- Link font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

        <script src="{{ asset('theme_admin/js/ie-emulation-modes-warning.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Xin chào {{ get_data_user('web', 'name') }}</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('home') }}"> Đăng xuất </a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="{{ \Request::route()->getName() == 'user.dashboard' ? 'active' : '' }}">
                            <a href="{{ route('user.dashboard') }}"> Trang Tổng Quan </a>
                        </li>
                        <li class="{{ \Request::route()->getName() == 'user.update.infor' ? 'active' : '' }}"><a href="{{ route('user.update.infor') }}"> Cập nhật thông tin </a></li>
                        <li class="{{ \Request::route()->getName() == 'user.update.password' ? 'active' : '' }}"><a href="{{ route('user.update.password') }}"> Cập nhật mật khẩu </a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    @if( Session::has('success'))
                        <div class="alert alert-success alert-dismissible" style="position: fixed; right: 20px">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> {{ Session::get('success') }}
                        </div>
                    @endif
                    @if( Session::has('danger'))
                        <div class="alert alert-danger alert-dismissible" style="position: flexed; right: 20px">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Danger!</strong> {{ Session::get('danger') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('theme_admin/js/bootstrap.min.js') }}"></script>
        @yield('script')
        <script>
            function readURL(input) {
                if(input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#out_img').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#in_img').change(function() {
                readURL(this);
            });

            $(function() {
                $('.see-pwd').click(function() {
                    let $this = $(this);
                    if($this.hasClass('active')) {
                        $this.parents('.form-group').find('input').attr('type','password');
                        $this.removeClass('active');
                    } else {
                        $this.parents('.form-group').find('input').attr('type','text');
                        $this.addClass('active');
                    }
                });
            });
        </script>
    </body>
</html>