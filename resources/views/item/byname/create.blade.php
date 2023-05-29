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
                        <div class="muted pull-left">项目别名</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <form class="form-horizontal" action="{{ route('itembyname.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <legend>添加项目别名</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">项目别名</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="itembyname" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                            <p class="help-block">举例：恒丰上海水滴1中心</p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">协议id</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="xieyi_id" id="typeahead" value="{{ $xieyi[0]->id }}"  data-provide="typeahead" data-items="4" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">关联协议</label>
                                        <div class="controls">
                                            <input type="text" class="span6" name="agreement" id="typeahead" value="{{ $xieyi[0]->agreement }}"  data-provide="typeahead" data-items="4" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="multiSelect">关联项目</label>
                                        <div class="controls">
                                            <select multiple="multiple" name="item_id" id="multiSelect" class="chzn-select span4">
                                                @foreach($items as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
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
