@extends('bookshop.master')

@include('bookshop.component.loading')

@section('title', '登录')

@section('content')
    <div class="weui_cells_title"></div>
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">帐号</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" id="username" placeholder="邮箱或手机号"/>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">密码</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="password" id="password" placeholder="不少于6位"/>
            </div>
        </div>
        <div class="weui_cell weui_vcode">
            <div class="weui_cell_hd"><label class="weui_label">验证码</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" placeholder="请输入验证码" id="validate_code"/>
            </div>
            <div class="weui_cell_ft">
                <img src="/service/validate_code/create" class="bk_validate_code"/>
            </div>
        </div>
    </div>
    <div class="weui_cells_tips"></div>
    <div class="weui_btn_area">
        <a class="weui_btn weui_btn_primary" href="javascript:" onclick="onLoginClick();">登录</a>
    </div>
    <a href="/register" class="bk_bottom_tips bk_important">没有帐号? 去注册</a>
@endsection

@section('my-js')
    <script type="text/javascript">
        $('.bk_validate_code').click(function () {
            $(this).attr('src', '/service/validate_code/create?random=' + Math.random());
        });
    </script>

    <script type="text/javascript">
        function onLoginClick() {
            var username = $('#username').val();
            var password = $('#password').val();
            var validate_code = $('#validate_code').val();
            $.ajax({
                type: "POST",
                url: '/service/login',
                dataType: 'json',
                cache: false,
                data: {username: username, password: password, validate_code: validate_code, _token: "{{csrf_token()}}"},
                success: function(data) {
                    if(data == null) {
                        $('.bk_toptips').show();
                        $('.bk_toptips span').html('服务端错误');
                        setTimeout(function() {$('.bk_toptips').hide();}, 2000);
                        return;
                    }
                    if(data.status != 0) {
                        $('.bk_toptips').show();
                        $('.bk_toptips span').html(data.message);
                        setTimeout(function() {$('.bk_toptips').hide();}, 2000);
                        return;
                    }

                    $('.bk_toptips').show();
                    $('.bk_toptips span').html('登录成功');
                    setTimeout(function() {$('.bk_toptips').hide();}, 2000);

                    location.href = "{{$return_url}}";
                },
                error: function(xhr, status, error) {
                    console.log(xhr);
                    console.log(status);
                    console.log(error);
                }
            });
        }
    </script>
@endsection