@include('Admin.layout.prompt')
<form action="/app/auth/login" method="post">
    <h1>登录</h1>
    <input type="text" name="account"  placeholder="用户名"> <br><br>
    <input type="password" name="password"  placeholder="密码"> <br><br>
{{--    必须要写的--}}
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="提交">
</form>