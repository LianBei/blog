@extends('App.layout.layout')
@section('content')
    <section class="container">
        @include('App.layout.prompt')
        <div class="content-wrap">
            <div class="content">
                <form action="/app/index/edit" method="post" enctype="multipart/form-data">
                    <table class="table" style="margin-bottom:0px;">
                        <tbody>
                        <tr>
                            <td wdith="20%">标题：</td>
                            <td width="80%"><input type="text" class="form-control" name="title" id="title" maxlength="10" autocomplete="off" value="{{$edit_data->title}}"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">图片:</td>
                            <td width="80%"><img src="{{asset('storage/images/article/'.$edit_data->pic)}}" style="width: 100px;height: 100px" alt="" /><br><br><input type="file" name="pic" id="pic"></td>
                        </tr>
                        {{--    必须要写的  --}}
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <tr>
                            <td wdith="20%">内容:</td>
                            <td width="80%"><textarea name="content" id="content" cols="80%" rows="30" style="float: right;font-size: 16px">{{$edit_data->content}}</textarea></td>
                        </tr>
                        <tr style="text-align: center">
                            <input type="hidden" name="id" value="{{$edit_data->id}}">
                            <td colspan="2" width="100%"><input type="submit" value="提交" style="width: 100px;height: 30px;"></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </section>

@stop