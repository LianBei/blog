<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>{{session('admin_name')}}</h1>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>password</td>
    </tr>
    @foreach($data as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->password}}</td>
        </tr>
    @endforeach
</table>
{{$data->links()}}
<a href="/logout">退出登录</a>


{{--<a href="/test">去往test页面</a>--}}
{{--@foreach($arr as $key => $value)--}}
{{--    @foreach($value as $key2 => $value2)--}}
{{--        <h1>{{$value2}} {{$key2}}</h1>--}}
{{--        @endforeach--}}
{{--@endforeach--}}

</body>
</html>