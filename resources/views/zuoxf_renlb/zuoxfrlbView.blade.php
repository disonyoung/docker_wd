<table class="table table-bordered">
    <thead>
    <tr>
        <th>结算期间</th>
        <th>项目名称</th>
        <th>销售ID</th>
        <th>姓名</th>
        <th>职位</th>
        <th>状态</th>
        <th>参训日期</th>
        <th>入职日期</th>
        <th>岗位类别</th>
    </tr>
    </thead>
    <tbody>
    @foreach($zuoxf_renlbs as $zuoxf_renlb)
        <tr>
            {{--            <td>{{\Carbon\Carbon::parse('1900-1-1')->addDays($zuoxf_renlb->settledate)->format('Y-m')}}</td>--}}
            <td>{{$zuoxf_renlb->settledate}}</td>
            <td>{{$zuoxf_renlb->item}}</td>
            <td>{{$zuoxf_renlb->sales_id}}</td>
            <td>{{$zuoxf_renlb->name}}</td>
            <td>{{$zuoxf_renlb->job}}</td>
            <td>{{$zuoxf_renlb->status}}</td>
            <td>{{$zuoxf_renlb->train_date}}</td>
            <td>{{$zuoxf_renlb->entry_date}}</td>
            <td>{{$zuoxf_renlb->position}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
