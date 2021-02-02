@extends('Admin.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
    <h1 class="page-header">详情</h1>
    <div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>标题</th>
                <th>作者</th>
                <th>评论数</th>
                <th>内容</th>
                <th>发布时间</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$count}}</td>
                    <td>{{$data->content}}</td>
                    <td>{{$data->created_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop