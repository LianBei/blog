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
        <form action="/Comment/checkAll" method="post">
            <h1 class="page-header">管理</h1>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>选择</th>
                        <th>评论</th>
                        <th>发布人</th>
                        <th>所属文章</th>
                        <th>日期</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $user)
                    <tr>
                        <td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>
                        <td>{{$user->comment}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->title}}</td>
                        <td>{{$user->created_at}}</td>
                        <td><a rel="1" name="see">查看</a> <a rel="1" name="delete" href="/admin/delete?id={{$user->id}}">删除</a></td>
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
                            <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="删除全部选中" name="checkbox_delete">删除</button>
                        </div>
                    </div>
                    <ul class="pagination pagenav">
                        {{$data -> links()}}
                    </ul>
                </nav>
            </footer>
        </form>
    </div>
    <!--查看评论模态框-->
    <div class="modal fade" id="seeComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >查看评论</h4>
                </div>
                <div class="modal-body">
                    <table class="table" style="margin-bottom:0px;">
                        <thead>
                        <tr> </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td wdith="20%">评论ID:</td>
                            <td width="80%" class="see-comment-id"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">评论页面:</td>
                            <td width="80%" class="see-comment-page"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">评论内容:</td>
                            <td width="80%" class="see-comment-content"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">IP:</td>
                            <td width="80%" class="see-comment-ip"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">所在地:</td>
                            <td width="80%" class="see-comment-address"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">系统:</td>
                            <td width="80%" class="see-comment-system"></td>
                        </tr>
                        <tr>
                            <td wdith="20%">浏览器:</td>
                            <td width="80%" class="see-comment-browser"></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr></tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">朕已阅</button>
                </div>
            </div>
        </div>
    </div>
@stop