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
                                                {{--                                                    <select name="filter_settledate" id="filter_settledate"--}}
                                                                                                                {{--                                                            class="chzn-select">--}}
                                                    {{--                                                        <option>选择结算月</option>--}}
                                                    {{--                                                        @foreach($settledates as $settledate)--}}
                                                    {{--                                                            <option--}}
                                                    {{--                                                                value="{{$settledate->settledate}}" @selected( $filter_settledate == $settledate->settledate)>--}}
                                                    {{--                                                                {{--}}
                                                    {{--                                                               \Carbon\Carbon::parse('1900-1-1')->addDays($settledate->settledate)->format('Y-m')--}}
                                                    {{--                                                                }}--}}
                                                    {{--                                                            </option>--}}
                                                    {{--                                                        @endforeach--}}
                                                    {{--                                                    </select>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="control-group">
                                            <label class="control-label" for="select01">结算中介</label>
                                            <div class="controls">
                                                {{--                                                    <select name="filter_settle_intermediary_id" id="select01"--}}
                                                                                                                {{--                                                            class="chzn-select">--}}
                                                    {{--                                                        <option>选择结算中介</option>--}}
                                                    {{--                                                        @foreach($intermediaries as $intermediary)--}}
                                                    {{--                                                            <option--}}
                                                    {{--                                                                value="{{$intermediary->id}}" @selected( $filter_settle_intermediary_id == $intermediary->id)>--}}
                                                    {{--                                                                {{$intermediary->name}}--}}
                                                    {{--                                                            </option>--}}
                                                    {{--                                                        @endforeach--}}
                                                    {{--                                                    </select>--}}
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
                                <form class="form-horizontal" action="{{ route('zxfrlb_index_export') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="span3">
                                        <div class="control-group">
                                            <label class="control-label" for="select01">结算期间</label>
                                            <div class="controls">
                                                {{--                                                    <select name="export_settledate" id="export_settledate"--}}
                                                                                                                {{--                                                            class="chzn-select">--}}
                                                    {{--                                                        <option>选择结算月</option>--}}
                                                    {{--                                                        @foreach($settledates as $settledate)--}}
                                                    {{--                                                            <option--}}
                                                    {{--                                                                value="{{$settledate->settledate}}" @selected( $filter_settledate == $settledate->settledate)>--}}
                                                    {{--                                                                {{--}}
                                                    {{--                                                               \Carbon\Carbon::parse('1900-1-1')->addDays($settledate->settledate)->format('Y-m')--}}
                                                    {{--                                                                }}--}}
                                                    {{--                                                            </option>--}}
                                                    {{--                                                        @endforeach--}}
                                                    {{--                                                    </select>--}}
                                                <br><br><br><br><br><br><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="control-group">
                                            <label class="control-label" for="select01">结算中介</label>
                                            <div class="controls">
                                                {{--                                                    <select name="export_settle_intermediary_id" id="export_settle_intermediary_id"--}}
                                                                                                                {{--                                                            class="chzn-select">--}}
                                                    {{--                                                        <option>选择结算中介</option>--}}
                                                    {{--                                                        @foreach($intermediaries as $intermediary)--}}
                                                    {{--                                                            <option--}}
                                                    {{--                                                                value="{{$intermediary->id}}" @selected( $filter_settle_intermediary_id == $intermediary->id)>--}}
                                                    {{--                                                                {{$intermediary->name}}--}}
                                                    {{--                                                            </option>--}}
                                                    {{--                                                        @endforeach--}}
                                                    {{--                                                    </select>--}}
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
                                <form class="form-horizontal" action="{{ route('import_subsequent') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="span4">
                                        <div class="control-group">
                                            <label class="control-label" for="fileInput">导后事前申请单</label>
                                            <div class="controls">
                                                <input class="input-file uniform_on" name="subsequentRequisition"
                                                       id="fileInput" type="file" required>

                                            </div>
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">导入</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="control-group">

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
                                <th>事后申请单号</th>
                                <th>事前申请单号</th>
                                <th>申请标题</th>
                                <th>状态</th>
                                <th>中介</th>
                                <th>城市</th>
                                <th>项目</th>
                                <th>提交日期</th>
                                <th>通过日期</th>
                                <th>申请费用</th>
                                <th>二次费用</th>
                                <th>实物费用</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sub_quests as $sub_quest)
                                <tr>
                                    <td>{{$sub_quest->subsequentId}}</td>
                                    <td>{{$sub_quest->advanceId}}</td>
                                    <td>{{$sub_quest->title}}</td>
                                    <td>{{$sub_quest->status}}</td>
                                    <td>{{$sub_quest->intermediary}}</td>
                                    <td>{{$sub_quest->city}}</td>
                                    <td>{{$sub_quest->item}}</td>
                                    <td>{{$sub_quest->submitDate}}</td>
                                    <td>{{$sub_quest->passedDate}}</td>
                                    <td>{{$sub_quest->price}}</td>
                                    <td>{{$sub_quest->secondPayPrice}}</td>
                                    <td>{{$sub_quest->entityPrice}}</td>
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
