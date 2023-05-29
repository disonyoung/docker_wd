<?php

namespace App\Http\Controllers;

//use App\Models\Zuoxf;
use App\Exports\ZuoxfHeduiExport;
use App\Exports\ZuoxfrlbExport;
use App\Exports\ZuoxfsExport;
use App\Models\xieyi;
use App\Models\Zhongjie;
use App\Models\Zuoxf;
use App\Models\Zuoxf_renlb;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ZuoxfController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $zuoxfs = Zuoxf::get();
        return view('zuoxf.index',['zuoxfs' => $zuoxfs]);
    }

    /**
     * 坐席费表下载，view视图下载， zuoxf/exportView.blade.php
     */
    public function export()
    {
        return Excel::download(new ZuoxfsExport, 'zuoxfs.xlsx');
    }

    public function hedui(Request $request)//坐席费核对
    {
        $settledate = $request->input('filter_settledate_id');
        $settle_intermediary_id = $request->input('filter_settle_intermediary_id');
        $filter_settledates = Zuoxf::select('settledate')
            ->groupby('settledate')
            ->get();
        $filter_intermediaries = Zhongjie::select('id','name')
            ->get();

        $zuoxfs = Zuoxf::select([//根据结算日期,结算中介,结算城市,统计销售\管理\服务\运营\总人力
                'settledate','settle_intermediary','city',
                'xieyi_id',//协议ID不查出来，没法关联协议的单价$zuoxf->xieyi->price
    //            'price', 'partner',
                \DB::raw('sum(sales) as sales'),
                \DB::raw('sum(managers) as managers'),
                \DB::raw('sum(services) as services'),
                \DB::raw('sum(rear_services) as rear_services'),
                \DB::raw('sum(manpower) as manpower'),
                \DB::raw('sum(amount) as amount'),
            ])
            ->when($settledate, function ($query) use ($settledate){//有结算日期就加入查询条件
                $query->where('settledate', $settledate);
            })
            ->when($settle_intermediary_id, function ($query) use ($settle_intermediary_id) {
                            $query->where('settle_intermediary_id', $settle_intermediary_id);
                        })
            ->groupby('settledate','settle_intermediary','city_id')
                        ->get();

        return view('zuoxf.hedui',[
            'zuoxfs' => $zuoxfs,
            'filter_settledates' => $filter_settledates,
            'filter_intermediaries' => $filter_intermediaries,
            'selected_settledate_id' => $settledate,
            'selected_intermediary_id' => $settle_intermediary_id,
        ]);
    }

    public function hedui_export(Request $request)
    {
        $intermediary = Zhongjie::where('id','=',$request->input('export_settle_intermediary_id'))->first();
        $intermediary_name = $intermediary->name;
        $export_settledate = $request->input('export_settledate');
        $export_settle_intermediary_id = $request->input('export_settle_intermediary_id');
//        $date = \Carbon\Carbon::parse('1900-1-1')->addDays($export_settledate)->format('Ym');
        $date = $export_settledate;
//        return Excel::download(new ZuoxfHeduiExport, 'zuoxfs_hedui.xlsx');//1,用视图view导出Excel,单sheet

//        return (new ZuoxfHeduiExport)->filter(//2,用数据库查询导出Excel,单sheet.
//            $request->input('export_settledate'),
//            $request->input('export_settle_intermediary_id'),
//            $intermediary->name,
//        )->download('zxfs.xlsx');
        return (new ZuoxfHeduiExport(//3,用多sheet导出Excel
            $export_settledate,
            $export_settle_intermediary_id,
            $intermediary_name,
        ))->download(('坐席费-'.$intermediary_name.'-'.$date.'.xlsx'));
    }

    /**
     *
     */
    public function add(Request $request)
    {
        $settledate = $request->input('settledate');
        $item = $request->input('item');
        $intermediary_id = $request->input('intermediary_id');
        $city_id = $request->input('city_id');
        $partner_id = $request->input('partner_id');
        $intermediary = $request->input('intermediary');
        $city = $request->input('city');
        $partner = $request->input('partner');

        $xieyi = xieyi::where('intermediary_id','=',$intermediary_id)
            ->where('partner_id','=',$partner_id)
            ->where('city_id','=',$city_id)
            ->first();

        $sales_count = Zuoxf_renlb::where([
            'settledate' => $settledate,
            'item' => $item,
            'intermediary_id' => $intermediary_id,
            'city_id' => $city_id,
            'partner_id' => $partner_id,
            'position' => '销售职'
        ])->count();
        $managers_count = Zuoxf_renlb::where([
            'settledate' => $settledate,
            'item' => $item,
            'intermediary_id' => $intermediary_id,
            'city_id' => $city_id,
            'partner_id' => $partner_id,
            'position' => '管理职'
        ])->count();
        $services_count = Zuoxf_renlb::where([
            'settledate' => $settledate,
            'item' => $item,
            'intermediary_id' => $intermediary_id,
            'city_id' => $city_id,
            'partner_id' => $partner_id,
            'position' => '服务职'
        ])->count();
        $rear_services_count1 = Zuoxf_renlb::where([
            'settledate' => $settledate,
            'item' => $item,
            'intermediary_id' => $intermediary_id,
            'city_id' => $city_id,
            'partner_id' => $partner_id,
            'position' => '大运营',
        ])->count();
        $rear_services_count2 = Zuoxf_renlb::where([
            'settledate' => $settledate,
            'item' => $item,
            'intermediary_id' => $intermediary_id,
            'city_id' => $city_id,
            'partner_id' => $partner_id,
            'position' => '质检',
        ])->count();
        $rear_services_count3 = Zuoxf_renlb::where([
            'settledate' => $settledate,
            'item' => $item,
            'intermediary_id' => $intermediary_id,
            'city_id' => $city_id,
            'partner_id' => $partner_id,
            'position' => '运营',
        ])->count();
        $rear_services_count4 = Zuoxf_renlb::where([
            'settledate' => $settledate,
            'item' => $item,
            'intermediary_id' => $intermediary_id,
            'city_id' => $city_id,
            'partner_id' => $partner_id,
            'position' => '续期',
        ])->count();
        $rear_services_count = $rear_services_count1+$rear_services_count2+$rear_services_count3+$rear_services_count4;

        $manpower = $sales_count+$managers_count+$services_count+$rear_services_count;
        $price = $xieyi->price;
        $amount = $price * $manpower;

        $zxf = Zuoxf::updateOrCreate(
            [
                'settledate' => $settledate,
                'intermediary_id' => $intermediary_id,
                'city_id' => $city_id,
                'partner_id' => $partner_id,
                'item'=>$item,
            ], [
                'settle_intermediary_id' => $xieyi->settle_intermediary_id,
                'intermediary' => $intermediary,
                'settle_intermediary' => $xieyi->jszhongjie->name,
                'city' => $city,
                'partner' => $partner,
                'sales'=>$sales_count,
                'managers'=>$managers_count,
                'services'=>$services_count,
                'rear_services'=>$rear_services_count,
                'manpower'=>$manpower,
                'xieyi_id'=>$xieyi->id,
                'amount' => $amount,
                ]
        );

        Zuoxf_renlb::where(
            [
                'settledate' => $settledate,
                'intermediary_id' => $intermediary_id,
                'city_id' => $city_id,
                'partner_id' => $partner_id,
            ]
        )
        ->update(['zuoxf_id' => $zxf->id]);

//        $zxfs = Zuoxf::get();
//        dd($zxfs);
//        return view('zuoxf.index',['zuoxfs' => $zxfs]);

        return back();
    }

    /**
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zuoxf  $zuoxf
     * @return \Illuminate\Http\Response
     */
    public function show(Zuoxf $zuoxf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zuoxf  $zuoxf
     * @return \Illuminate\Http\Response
     */
    public function edit(Zuoxf $zuoxf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zuoxf  $zuoxf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zuoxf $zuoxf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zuoxf  $zuoxf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zuoxf $zuoxf)
    {
        //
    }
}