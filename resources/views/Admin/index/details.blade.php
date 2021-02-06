@extends('Admin.layout.layout')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
    <h1 class="page-header">详情</h1>
    <table>
        <tbody>
        <tr>
            <td bgcolor="#7fffd4" align="center">
                <font style="FonT-siZe: 14pt" color="#000066">
                    <b>{{$data->title}}</b>
                </font>
            </td>
        </tr>
        <tr>
            <td align="middle">
            <table style="BorDer-CoLLApse: collapse; WorD-WrAp: break-word" width="100%">
                <tbody>
                    <td width="650">
                        <div style="MArGin: 15px" align="center">
                            {{$data->username}}
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            {{$data->created_at}}
                        </div>
                   </td>
                </tbody>
            </table>
            </td>
        </tr>
        <tr>
            <td align="middle">
                <table style="BorDer-CoLLApse: collapse; WorD-WrAp: break-word" width="100%">
                    <tbody>
                    <td width=100%>
                        <div style="MArGin: 15px" align="center">
                            {{$data->content}}
                        </div>
                    </td>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <table>

    </table>
</div>
@stop