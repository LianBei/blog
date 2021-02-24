@include('Admin.layout.prompt')
<form action="/app/auth/registered" method="post">
    <h1>注册</h1>
    <input type="text" name="account"  placeholder="请输入要注册的账号"> <br><br>
    <input type="password" name="password"  placeholder="请输入要注册的密码"> <br><br>
    <input type="text" name="username" placeholder="请输入要注册的用户名"><br><br>
    {{--    必须要写的--}}
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="提交">
</form>