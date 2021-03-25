
@extends('App.layout.layout')
@section('content')
    <section class="container">
        <div class="content-wrap">
            @include('App.layout.prompt')
            <div class="">
                <div class="title">
                    <h1 style="line-height: 1.8;text-align: center">编辑文章</h1>
                </div>
                <div class="container" style="width: 100%; background-color: white" >
                    <div class="row">
                        <br><br>
                        <form action="/app/index/edit" enctype="multipart/form-data" method="post" class="form-group col-md-12 form-inline">
                            <div style="display: none"><input type="text" name="id" id="id" value="{{$edit_data->id}}"></div>
                            <div class="col-md-12"><label class="" for="">标题：</label></div>
                            <div class="col-md-12"><input type="text" name="title" value="{{$edit_data->title}}" class="form-control" style="width: 100%;"></div>
                            <div class="col-md-12"><label for="">内容：</label></div>
                            <div class="col-md-12"><textarea class="form-control" name="content" id="content"  cols="30" rows="10"  style="width: 100%">{{$edit_data->content}}</textarea></div>
                            <div class="col-md-12"><label for="">图片：</label></div>
                            <div class="col-md-12">
                                @if($edit_data->pic!='default.png')
                                    <img src="{{asset('storage/images/article/'.$edit_data->pic)}}" alt=""  style="width: 200px;height: 200px" />
                                @endif
                                <input type="file" name="pic" id="pic">
                            </div>
                            {{--    必须要写的--}}
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="col-md-12" style="text-align: center">
                                <button type="submit" style="width: 50px">提交</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>
@stop
