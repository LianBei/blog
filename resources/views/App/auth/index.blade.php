@if($error = $errors->all())
    {{$error[0]}}
@endif
@if(session('success'))
    {{session('success')}}
    @endif

@if(session('error'))
    {{session('error')}}
@endif
<form action="/Auth/login" method="post">
    <input type="text" name="name"  placeholder="用户名"> <br><br>
    <input type="password" name="password"  placeholder="密码"> <br><br>
{{--    必须要写的--}}
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="提交">
</form>