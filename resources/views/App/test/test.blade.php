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
@if($test == 234)
    <h1>是</h1>
    @endif
@foreach($arr as $key =>$abc)
    @foreach($abc as $key2 => $abc2)
        <h1>{{$abc2}} {{$key2}}</h1>
    @endforeach
{{--    <h1>{{$abc['abc']}}</h1>--}}
@endforeach
</body>
</html>