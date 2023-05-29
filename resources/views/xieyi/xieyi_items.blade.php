@extends('layout.app')

@section('content')
    <div class="span10" id="content">
        <div class="row-fluid">
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="breadcrumb">
                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <li>
                            <a href="#">首页</a> <span class="divider">/</span>
                        </li>
                        <li>
                            <a href="#">设置</a> <span class="divider">/</span>
                        </li>
                        <li class="active">工具</li>
                    </ul>
                </div>
            </div>

            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Form Example</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
{{--                            <form class="form-horizontal" action="{{ route('import') }}" method="post" enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                <fieldset>--}}
{{--                                    <div class="span12">--}}
{{--                                        <div class="control-group">--}}
{{--                                            <button href="{{ route('zuoxf_export') }}" class="btn btn-primary">Save changes</button>--}}
{{--                                            <a href="{{ route('zuoxf_export') }}">下载</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </fieldset>--}}
{{--                            </form>--}}
                            <a href="{{ route('xieyi_create') }}" >添加关联项目</a>
                        </div>
                    </div>
                    <!-- /block -->
                </div>

                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Bordered Table</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>协议名称</th>
                                        <th>项目名称</th>
                                        <th>项目别名</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($xieyiitems as $xieyiitem)
                                        <tr>
                                            <td>{{$xieyiitem->id}}</td>
                                            <td>{{$xieyiitem->xieyi->agreement}}</td>
                                            <td>{{$xieyiitem->item->name}}</td>
                                            <td>{{$xieyiitem->item_name}}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>


        </div>
    </div>
@endsection

