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
                        <div class="muted pull-left">协议</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <form class="form-horizontal" action="{{ route('xieyi_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <legend>添加协议</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">协议名称</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="agreement" id="typeahead"  data-provide="typeahead" data-items="4" >
                                            <p class="help-block">举例：坐席费_华康_水滴_苏州_1568</p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="multiSelect">中介</label>
                                        <div class="controls">
                                            <select multiple="multiple" name="intermediary_id" id="multiSelect" class="chzn-select span4">
                                                <option value="1">恒丰</option>
                                                <option value="2">华康</option>
                                                <option value="3">凯森</option>
                                                <option value="4">白鸽宝</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="multiSelect">结算中介</label>
                                        <div class="controls">
                                            <select multiple="multiple" name="settle_intermediary_id" id="multiSelect" class="chzn-select span4">
                                                <option value="1">恒丰</option>
                                                <option value="2">华康</option>
                                                <option value="3">凯森</option>
                                                <option value="4">白鸽宝</option>
                                                <option value="5">元保数科</option>
                                                <option value="6">纵情向前</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="multiSelect">阵营</label>
                                        <div class="controls">
                                            <select multiple="multiple" name="partner_id" id="multiSelect" class="chzn-select span4">
                                                <option value="1">水滴</option>
                                                <option value="2">元保</option>
                                                <option value="3">轻松筹</option>
                                                <option value="4">众安</option>
                                                <option value="5">i云保</option>
                                                <option value="6">星火保</option>
                                                <option value="7">自建</option>
                                                <option value="8">质检</option>
                                                <option value="9">续服</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="multiSelect">城市</label>
                                        <div class="controls">
                                            <select multiple="multiple" name="city_id" id="multiSelect" class="chzn-select span4">
                                                <option value="1">成都</option>
                                                <option value="2">青岛</option>
                                                <option value="3">武汉</option>
                                                <option value="4">济南</option>
                                                <option value="5">西安</option>
                                                <option value="6">上海</option>
                                                <option value="7">合肥</option>
                                                <option value="8">苏州</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="optionsCheckbox">协议类型</label>
                                        <div class="controls" id="radioDiv3">
                                            <label class="uniform">
                                                <label>
                                                    <input type="radio" name="type" value="1" checked='checked'>坐席费
                                                </label>
                                                <label >
                                                    <input type="radio" name="type"  value="2">系统费
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">费用单价</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="price" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                            <p class="help-block">举例：1568</p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="optionsCheckbox">费用类型</label>
                                        <div class="controls" id="radioDiv4">
                                            <label class="uniform">
                                                <label>
                                                    <input type="radio" name="rule" value="1" checked='checked'>峰值费用
                                                </label>
                                                <label >
                                                    <input type="radio" name="rule"  value="2">固定费用
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">提交</button>
                                        <button type="reset" class="btn">重置</button>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </div>
                    <!-- /block -->
                </div>


            </div>


        </div>
    </div>
@endsection

<script>
    $("#radioDiv input[type='radio']").click(function(){
        //1.先移除之前元素的checked
        $("#radioDiv input[type='radio']:checked").removeAttr("checked");
        //2.给当前点击的单选框加checked
        $(this).attr("checked","true")
        //3.测试打印值
        console.log($("#radioDiv input[type='radio']:checked").val())
    })
</script>
<script>
    $("#radioDiv2 input[type='radio']").click(function(){
        //1.先移除之前元素的checked
        $("#radioDiv2 input[type='radio']:checked").removeAttr("checked");
        //2.给当前点击的单选框加checked
        $(this).attr("checked","true")
        //3.测试打印值
        console.log($("#radioDiv2 input[type='radio']:checked").val())
    })
</script><script>
    $("#radioDiv3 input[type='radio']").click(function(){
        //1.先移除之前元素的checked
        $("#radioDiv3 input[type='radio']:checked").removeAttr("checked");
        //2.给当前点击的单选框加checked
        $(this).attr("checked","true")
        //3.测试打印值
        console.log($("#radioDiv3 input[type='radio']:checked").val())
    })
</script><script>
    $("#radioDiv4 input[type='radio']").click(function(){
        //1.先移除之前元素的checked
        $("#radioDiv4 input[type='radio']:checked").removeAttr("checked");
        //2.给当前点击的单选框加checked
        $(this).attr("checked","true")
        //3.测试打印值
        console.log($("#radioDiv4 input[type='radio']:checked").val())
    })
</script>
