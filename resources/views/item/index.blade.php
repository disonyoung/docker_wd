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
{{--                            <a href="{{ route('') }}" >添加项目</a>--}}
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
                                        {{--        <th>项目名称</th>--}}
                                        <th>项目名称</th>
                                        <th>项目别名</th>
                                        <th>中介</th>
                                        <th>城市</th>
                                        <th>阵营</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->byname}}</td>
                                            <td>{{$item->xieyi->zhongjie->name}}</td>
                                            <td>{{$item->xieyi->city->name}}</td>
                                            <td>{{$item->xieyi->zhenying->name}}</td>
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

