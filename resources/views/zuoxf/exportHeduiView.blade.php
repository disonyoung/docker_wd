<table class="table table-bordered">
    <thead>
    <tr>
        <th>结算期间</th>
        <th>结算中介</th>
        <th>城市</th>
        <th>阵营</th>
        <th>销售职</th>
        <th>管理职</th>
        <th>服务职</th>
        <th>大运营</th>
        <th>总人力</th>
        <th>单价</th>
        <th>总额</th>
    </tr>
    </thead>
    <tbody>
    @foreach($zuoxfs as $zuoxf)
        <tr>
{{--            <td>{{\Carbon\Carbon::parse('1900-1-1')->addDays($zuoxf->settledate)->format('Y-m')}}</td>--}}
            <td>{{$zuoxf->settledate}}</td>
            <td>{{$zuoxf->settle_intermediary}}</td>
            <td>{{$zuoxf->city}}</td>
            <td>{{$zuoxf->partner}}</td>
            <td>{{$zuoxf->sales}}</td>
            <td>{{$zuoxf->managers}}</td>
            <td>{{$zuoxf->services}}</td>
            <td>{{$zuoxf->rear_services}}</td>
            <td>{{$zuoxf->manpower}}</td>
{{--            <td>{{dd($zuoxf->xieyi->price)}}</td>--}}
            <td>{{$zuoxf->xieyi->price}}</td>
            <td>{{$zuoxf->amount}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
