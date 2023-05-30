@extends('layout.app')
@section('style')

@endsection
@section('content')
    <div class="span10" id="content">
        <div class="row-fluid">
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="breadcrumb">
                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar"
                                                                     rel='tooltip'>&nbsp;</a></i>
                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#'
                                                                                            title="Show Sidebar"
                                                                                            rel='tooltip'>&nbsp;</a></i>
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
                            <fieldset>
                                <legend>条件查询</legend>
                                <div class="span10">
                                    <form class="form-horizontal" action="{{ route('zuoxfRenlb') }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="span3">
                                            <div class="control-group">
                                                <label class="control-label" for="select01">结算期间</label>
                                                <div class="controls">
                                                    <select name="filter_settledate" id="filter_settledate"
                                                            class="chzn-select">
                                                        <option>选择结算月</option>
                                                        @foreach($settledates as $settledate)
                                                            <option
                                                                value="{{$settledate->settledate}}" @selected( $filter_settledate == $settledate->settledate)>
                                                                {{
                                                               \Carbon\Carbon::parse('1900-1-1')->addDays($settledate->settledate)->format('Y-m')
                                                                }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="select01">结算中介</label>
                                                <div class="controls">
                                                    <select name="filter_settle_intermediary_id" id="select01"
                                                            class="chzn-select">
                                                        <option>选择结算中介</option>
                                                        @foreach($intermediaries as $intermediary)
                                                            <option
                                                                value="{{$intermediary->id}}" @selected( $filter_settle_intermediary_id == $intermediary->id)>
                                                                {{$intermediary->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span2">
                                            <div class="control-group">
                                                <button type="submit" class="btn btn-primary">筛选</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="span10">
                                    <form class="form-horizontal" action="{{ route('zxfrlb_index_export') }}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="span3">
                                            <div class="control-group">
                                                <label class="control-label" for="select01">结算期间</label>
                                                <div class="controls">
                                                    <select name="export_settledate" id="export_settledate"
                                                            class="chzn-select">
                                                        <option>选择结算月</option>
                                                        @foreach($settledates as $settledate)
                                                            <option
                                                                value="{{$settledate->settledate}}" @selected( $filter_settledate == $settledate->settledate)>
                                                                {{
                                                               \Carbon\Carbon::parse('1900-1-1')->addDays($settledate->settledate)->format('Y-m')
                                                                }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <br><br><br><br><br><br><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group">
                                                <label class="control-label" for="select01">结算中介</label>
                                                <div class="controls">
                                                    <select name="export_settle_intermediary_id"
                                                            id="export_settle_intermediary_id"
                                                            class="chzn-select">
                                                        <option>选择结算中介</option>
                                                        @foreach($intermediaries as $intermediary)
                                                            <option
                                                                value="{{$intermediary->id}}" @selected( $filter_settle_intermediary_id == $intermediary->id)>
                                                                {{$intermediary->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span2">
                                            <div class="control-group">
                                                <button type="submit" class="btn btn-primary">下载</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="span10">
                                    <form class="form-horizontal" action="{{ route('import') }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--                                        <div class="span4">--}}
                                        <div>
                                            <div class="control-group">
                                                <label class="control-label" for="fileInput">导入坐席费人力表</label>
                                                <div class="controls">
                                                    <input class="input-file uniform_on" name="zuoxf_renlb"
                                                           id="fileInput" type="file" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span2">
                                            <div class="control-group">
                                                <button type="submit" class="btn btn-primary">导入</button>
                                                {{--                                                <button type="reset" class="btn">Cancel</button>--}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>


                        </div>
                    </div>
                </div>
                <!-- /block -->

                {{--                <div class="block-content collapse in">--}}
                {{--                    <div class="span12">--}}
                {{--                        <a href="{{ route('zxf_rlb_update') }}" >更新协议内容</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
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
                                    {{--                                    <th>ID</th>--}}
                                    <th>结算期间</th>
                                    {{--                                    <th>中介</th>--}}
                                    {{--                                    <th>阵营</th>--}}
                                    {{--                                    <th>城市</th>--}}
                                    <th>项目名称-原</th>
                                    <th>项目名称</th>
                                    {{--                                    <th>管理职</th>--}}
                                    {{--                                    <th>服务职</th>--}}
                                    {{--                                    <th>大运营</th>--}}
                                    <th>总人力</th>
                                    <th>操作</th>

                                    {{--                                    <th>入职日期</th>--}}
                                    {{--                                    <th>上线日期</th>--}}
                                    {{--                                    <th>岗位类别</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($zuoxf_renlbs as $zuoxf_renlb)
                                    <tr>
                                        {{--                                        <td>{{dd($zuoxf_renlb) }}</td>--}}
                                        {{--                                        <td>{{ \Carbon\Carbon::parse('1900-1-1')->addDays($zuoxf_renlb->settledate)->format('Y-m') }}</td>--}}
                                        <td>{{$zuoxf_renlb->settledate }}</td>
                                        <td>
                                            <a href="{{ route('itembyname.index.xieyi_id',['xieyi_id'=>$zuoxf_renlb->xieyi_id]) }}">{{$zuoxf_renlb->item }}</a>
                                        </td>
                                        <td>{{$zuoxf_renlb->xieyi_id ? $zuoxf_renlb->xieyi->agreement : "请更新城市阵营" }}</td>
                                        <td>{{$zuoxf_renlb->manpower_num}}</td>
                                        <td>
                                            <div class="span2">
                                                <form class="form-horizontal" action="{{ route('zxf_rlb_del') }}"
                                                      method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="control-group">
                                                        <input name="settledate" value="{{$zuoxf_renlb['settledate']}}"
                                                               type="hidden">
                                                        <input name="item" value="{{$zuoxf_renlb['item']}}"
                                                               type="hidden">
                                                        <input name="zuoxf_id" value="{{$zuoxf_renlb->zuoxf_id}}"
                                                               type="hidden">
                                                        <button type="submit" class="btn btn-primary">删除</button>
                                                    </div>
                                                </form>
                                            </div>

                                            {{--                                            <div class="span2">--}}
                                            {{--                                                <form class="form-horizontal" action="{{ route('zxf_add') }}" method="post" enctype="multipart/form-data">--}}
                                            {{--                                                    @csrf--}}
                                            {{--                                                    <div class="control-group">--}}
                                            {{--                                                        <input name="settledate" value="{{$zuoxf_renlb->settledate}}" type="hidden">--}}
                                            {{--                                                        <input name="intermediary_id" value="{{$zuoxf_renlb['intermediary_id']}}" type="hidden">--}}
                                            {{--                                                        <input name="city_id" value="{{$zuoxf_renlb['city_id']}}" type="hidden">--}}
                                            {{--                                                        <input name="partner_id" value="{{$zuoxf_renlb->partner_id}}" type="hidden">--}}
                                            {{--                                                        <input name="intermediary" value="{{$zuoxf_renlb->intermediary}}" type="hidden">--}}
                                            {{--                                                        <input name="city" value="{{$zuoxf_renlb->city}}" type="hidden">--}}
                                            {{--                                                        <input name="partner" value="{{$zuoxf_renlb->partner}}" type="hidden">--}}
                                            {{--                                                        <input name="item" value="{{$zuoxf_renlb['item']}}" type="hidden">--}}
                                            {{--                                                        <button type="submit" class="btn btn-primary">{{ $zuoxf_renlb->zuoxf ? "更新" : "写入" }}</button>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </form>--}}
                                            {{--                                            </div>--}}

                                            <div class="span2">
                                                <form class="form-horizontal" action="{{ route('zxf_rlb_update') }}"
                                                      method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="control-group">
                                                        <input name="settledate" value="{{$zuoxf_renlb->settledate}}"
                                                               type="hidden">
                                                        <input name="item" value="{{$zuoxf_renlb['item']}}"
                                                               type="hidden">
                                                        <button type="submit"
                                                                class="btn btn-primary">{{ $zuoxf_renlb->xieyi_id ? "更新" : "写入" }}</button>
                                                    </div>
                                                </form>
                                            </div>

                                            {{--                                            <div class="span4">--}}
                                            {{--                                                <div class="control-group">--}}
                                            {{--                                                    <label class="control-label" for="select01">Select list</label>--}}
                                            {{--                                                    <div class="controls">--}}
                                            {{--                                                        <form class="form-horizontal" action="{{ route('zxf_rlb_update') }}" method="post" enctype="multipart/form-data">--}}
                                            {{--                                                        @csrf--}}
                                            {{--                                                        <select id="select01" name="xieyi_id" class="chzn-select">--}}
                                            {{--                                                            <option>中介-阵营-城市</option>--}}
                                            {{--                                                            @foreach($xieyis as $xieyi)--}}
                                            {{--                                                            <option value="{{$xieyi->id}}">{{$xieyi->intermediary_id}}-{{$xieyi->partner_id}}-{{$xieyi->city_id}}</option>--}}
                                            {{--                                                            <option value="{{$xieyi->id}}">{{$xieyi->agreement}}</option>--}}
                                            {{--                                                            @endforeach--}}
                                            {{--                                                        </select>--}}
                                            {{--                                                            <input name="settledate" value="{{$zuoxf_renlb['settledate']}}" type="hidden">--}}
                                            {{--                                                            <input name="item" value="{{$zuoxf_renlb['item']}}" type="hidden">--}}
                                            {{--                                                            <button type="submit" class="btn btn-primary">更新</button>--}}
                                            {{--                                                        </form>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="span12">
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>


    </div>
    </div>
@endsection

@section('script')
    <!--/.fluid-container-->
    <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
    <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
    <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

    <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

    <script src="vendors/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/jquery.uniform.min.js"></script>
    <script src="vendors/chosen.jquery.min.js"></script>
    <script src="vendors/bootstrap-datepicker.js"></script>

    <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>


    <script src="assets/scripts.js"></script>
    <script>
        $(function () {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    var $percent = ($current / $total) * 100;
                    $('#rootwizard').find('.bar').css({width: $percent + '%'});
                    // If it's the last tab then hide the last button and show the finish instead
                    if ($current >= $total) {
                        $('#rootwizard').find('.pager .next').hide();
                        $('#rootwizard').find('.pager .finish').show();
                        $('#rootwizard').find('.pager .finish').removeClass('disabled');
                    } else {
                        $('#rootwizard').find('.pager .next').show();
                        $('#rootwizard').find('.pager .finish').hide();
                    }
                }
            });
            $('#rootwizard .finish').click(function () {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
    </script>
@endsection
