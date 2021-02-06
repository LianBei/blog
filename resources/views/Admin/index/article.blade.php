@extends('Admin.layout.layout')
@section('content')
    {{--提示语句固定值--}}
    @if(session('error'))
        <h2>{{session('error')}}</h2>
    @endif
    @if(session('success'))
        <h2>{{session('success')}}</h2>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
        <form action="/admin/add" method="post" >
            <h1 class="page-header">操作</h1>
            <ol class="breadcrumb" style="height: 50px">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <li><a href="#myModal" data-toggle="modal"><button class="add btn btn-primary">增加文章</button></a></li>
                </div>
                <div class="col-xs-12 col-md-9 col-sm-8">
                    <form action="" method="post" class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
                            <span class="input-group-btn"><button class="btn btn-default" type="submit">搜索</button></span>
                        </div>
                    </form>
                </div>
            </ol>
            <h1 class="page-header">管理 </h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>选择</th>
                        <th>标题</th>
                        <th>作者</th>
                        <th>评论数</th>
                        <th>发布时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $user)
                        <tr>
                            <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
                            <td>{{$user->title}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->count}}</td>
                            <td>{{$user->created_at}}</td>
                            <td><a href="/admin/details?id={{$user->id}}">详情</a><a rel="6" href="/admin/delete?id={{$user->id}}">删除</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           <footer class="message_footer">
                <nav>
                    <div class="btn-toolbar operation" role="toolbar">
                        <div class="btn-group" role="group"> <a class="btn btn-default" onClick="select()">全选</a> <a class="btn btn-default" onClick="reverse()">反选</a> <a class="btn btn-default" onClick="noselect()">不选</a> </div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="删除全部选中" name="checkbox_delete" href="/admin/delete?id={{$user->id}}">删除</button>
                        </div>
                    </div>
                    <div class="pagination pagenav">
                        {{$data -> links()}}
                    </div>
                </nav>
            </footer>
            <!-- 模态框（Modal） -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">增加文章</h4>
                        </div>
                        <form action="/admin/add" id="xiugai" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" id="id">
                            <div class="modal-body">标题:<input type="text" name="title" id="title"></div>
                            <div class="modal-body">作者:<input type="text" name="user_id" id="user_id"></div>
                            <div class="modal-body">内容:<input type="text" name="content" id="content"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                <button type="submit" class="btn btn-primary">提交更改</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal -->
            </div>
        </form>
    </div>
    <script>
        $('.add').click(function () {
            $('#id').val('')
            $('#title').val('');
            $('#user_id').val('');
            $('#content').val('');
        });
    </script>
@stop