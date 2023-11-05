@extends('layout.app')
@section('style')

@endsection
@section('content')
    <div class="span10" id="content">
        <div class="row-fluid">
            <div class="navbar"><!-- 导航栏 -->
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
            <div class="row-fluid"><!-- 条件筛选 -->
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Form Example1</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span10">
                            <form class="form-horizontal" action="{{ route('zuoxf_hedui_filter') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <legend>条件筛选</legend>
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label" for="select01">结算期间</label>
                                            <div class="controls">
                                                <select name="filter_settledate_id" id="filter_settledate_id"
                                                        class="chzn-select">
                                                    {{--                                                        <option>选择结算月</option>--}}
                                                        @foreach($filter_settledates as $settledate)
                                                            <option
                                                                value="{{$settledate->settledate}}" @selected( $selected_settledate_id == $settledate->settledate)>
                                                                {{
//                                                               \Carbon\Carbon::parse('1900-1-1')->addDays($settledate->settledate)->format('Y-m')
                                                               $settledate->settledate
                                                                }}
                                                            </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        {{--                                        <div class="span4">--}}
                                        <div class="control-group">
                                            <label class="control-label" for="select01">结算中介</label>
                                            <div class="controls">
                                                <select name="filter_settle_intermediary_id"
                                                        id="filter_settle_intermediary_id"
                                                        class="chzn-select">
                                                    {{--                                                        <option>选择结算中介</option>--}}
                                                    @foreach($filter_intermediaries as $intermediary)
                                                        <option
                                                            value="{{$intermediary->id}}" @selected( $selected_intermediary_id == $intermediary->id)>
                                                            {{$intermediary->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        {{--                                        </div>--}}
                                    </div>
                                </fieldset>
                                <div class="span10">
                                    <div class="span2">
                                        <div class="control-group">
                                            <button type="submit" class="btn btn-primary">筛选</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="{{ route('zuoxf_hedui_export') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <fieldset>

                                    <div class="span10">
                                        <div class="span4">
                                            <div class="control-group" hidden="hidden">
                                                <label class="control-label" for="select01">结算期间</label>
                                                <div class="controls">
                                                    <select name="export_settledate" id="export_settledate"
                                                            class="chzn-select">
                                                        {{--                                                        <option>选择结算月</option>--}}
                                                        @foreach($filter_settledates as $settledate)
                                                            <option
                                                                value="{{$settledate->settledate}}" @selected( $selected_settledate_id == $settledate->settledate)>
                                                                {{
//                                                               \Carbon\Carbon::parse('1900-1-1')->addDays($settledate->settledate)->format('Y-m')
                                                               $settledate->settledate
                                                                }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <br><br><br><br><br><br><br><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group" hidden="hidden">
                                                <label class="control-label" for="select01">结算中介</label>
                                                <div class="controls">
                                                    <select name="export_settle_intermediary_id"
                                                            id="export_settle_intermediary_id"
                                                            class="chzn-select">
                                                        {{--                                                        <option>选择结算中介</option>--}}
                                                        @foreach($filter_intermediaries as $intermediary)
                                                            <option
                                                                value="{{$intermediary->id}}" @selected( $selected_intermediary_id == $intermediary->id)>
                                                                {{$intermediary->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="span10">
                                    <div class="span2">
                                        <div class="control-group">
                                            <button type="submit" class="btn btn-primary">下载</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form class="form-horizontal" action="{{ route('zuoxf_hedui_tomail') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <fieldset>

                                    <div class="span10">
                                        <div class="span4">
                                            <div class="control-group" hidden="hidden">
                                                <label class="control-label" for="select01">结算期间</label>
                                                <div class="controls">
                                                    <select name="export_settledate" id="export_settledate"
                                                            class="chzn-select">
                                                        {{--                                                        <option>选择结算月</option>--}}
                                                        @foreach($filter_settledates as $settledate)
                                                            <option
                                                                value="{{$settledate->settledate}}" @selected( $selected_settledate_id == $settledate->settledate)>
                                                                {{
//                                                               \Carbon\Carbon::parse('1900-1-1')->addDays($settledate->settledate)->format('Y-m')
                                                               $settledate->settledate
                                                                }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <br><br><br><br><br><br><br><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span4">
                                            <div class="control-group" hidden="hidden">
                                                <label class="control-label" for="select01">结算中介</label>
                                                <div class="controls">
                                                    <select name="export_settle_intermediary_id"
                                                            id="export_settle_intermediary_id"
                                                            class="chzn-select">
                                                        {{--                                                        <option>选择结算中介</option>--}}
                                                        @foreach($filter_intermediaries as $intermediary)
                                                            <option
                                                                value="{{$intermediary->id}}" @selected( $selected_intermediary_id == $intermediary->id)>
                                                                {{$intermediary->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="span10">
                                    <div class="span2">
                                        <div class="control-group">
                                            <button type="submit" class="btn btn-primary">发邮件</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">结算中介对账单</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            @include('zuoxf.exportHeduiView')
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
