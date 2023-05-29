<?php

namespace App\Http\Controllers;

use App\Exports\ZuoxfrlbExport;
use App\Exports\ZuoxfsExport;
use App\Imports\Zuoxf_renlbsImport;
use App\Models\xieyi;
use App\Models\Zhongjie;
use App\Models\Zuoxf;
use App\Models\Zuoxf_renlb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Zuoxf_renlbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter_settledate = $request->input('filter_settledate');
        $filter_settle_intermediary_id = $request->input('filter_settle_intermediary_id');

        $zuoxf_renlbs = DB::table('zuoxf_renlbs')
            ->when($filter_settledate, function ($query) use ($filter_settledate){
                $query->where('settledate',$filter_settledate);
            })
            ->when($filter_settle_intermediary_id, function ($query) use ($filter_settle_intermediary_id){
                $query->where('settle_intermediary_id',$filter_settle_intermediary_id);
            })
            ->get()->toArray();
        $intermediaries = Zhongjie::all();

        $settledates = Zuoxf_renlb::select('settledate')
            ->groupby('settledate')
            ->get();
//        dd($zuoxf_renlbs);
        return view(
            'zuoxf_renlb.index',
            [
                'zuoxf_renlbs' => $zuoxf_renlbs,//查询条件后,返回页面坐席人力表全部数据
                'intermediaries' => $intermediaries,//全部中介公司
                'settledates' => $settledates,//去重后的坐席人力表里的结算日期
                'filter_settledate' => $filter_settledate,//筛选的结算日期，带回页面
                'filter_settle_intermediary_id' => $filter_settle_intermediary_id,//筛选的中介id，带回页面
            ]
        );
    }

    public function index_export(Request $request)
    {
//        return Excel::download(new ZuoxfrlbExport(), 'zfsrlb.xlsx');
        return (new ZuoxfrlbExport)->filter(
            $request->input('export_settledate'),
            $request->input('export_settle_intermediary_id'),
        )->download('zfsrlb.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate(['zuoxf_renlb' => ['required']]);

//        dd($request->file('zuoxf_renlb'));

        Excel::import(new Zuoxf_renlbsImport, $request->file('zuoxf_renlb'));

        return redirect('/zuoxf_renlib_zl')->with('success', 'All good!');
    }

    /**
     *
     */
    public function zhengli()
    {
        $zuoxf_renlbs = Zuoxf_renlb::select([
            'settledate','item','intermediary',
            'city','partner','xieyi_id',
            'intermediary_id','city_id','partner_id','zuoxf_id',
            \DB::raw('count(id) as manpower_num'),
            ])
            ->groupby(['settledate','item',])
            ->orderby('zuoxf_id')
            ->get();

//        $zuoxf_renlbs = Zuoxf_renlb::where('is_paid','0')
//            ->select([
//                'item',
//                'position',
//                'settledate',
//                \DB::raw('count(id) as manpower_num'),
//                'intermediary','city','partner','intermediary_id','city_id','partner_id'
////                \DB::raw('count(id) as count_num'),
//            ])
//            ->groupby(['settledate','item',])
//            ->get()->toArray();

        $xieyis = DB::table('xieyis')->get();

        return view(
            'zuoxf_renlb.zhengli',
            [
                'zuoxf_renlbs' => $zuoxf_renlbs,
                'xieyis' => $xieyis,
            ]);
    }


    public function hedui_export()
    {
        return Excel::download(new ZuoxfHeduiExport, 'zuoxfs_hedui.xlsx');
    }

    /**
     *
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     *
     */
    public function update(Request $request, Zuoxf_renlb $zuoxf_renlb)
    {
        $xieyi_id = $request->input('xieyi_id');
        $settledate = $request->input('settledate');
        $item = $request->input('item');
        $xieyi = xieyi::where('id','=',$xieyi_id)
//            ->select('intermediary_id','zhenying_id','city_id')
//            ->where('id','=',$xieyi_id)
            ->first();
//            ->toArray();

        $items = DB::table('zuoxf_renlbs')
//            ->join('xieyis')
            ->select('item')
            ->where('settledate', $settledate)
            ->groupby('item')
            ->get()->toArray();


        Zuoxf_renlb::where('settledate', $settledate)
        ->where('item',$item)
        ->update(
            [
                'xieyi_id' => $xieyi->id,
                'intermediary_id' => $xieyi->intermediary_id,
                'settle_intermediary_id' => $xieyi->settle_intermediary_id,
                'partner_id' => $xieyi->partner_id,
                'city_id' => $xieyi->city_id,
                'intermediary' => $xieyi->zhongjie->name,
                'settle_intermediary' => $xieyi->jszhongjie->name,
                'partner' => $xieyi->zhenying->name,
                'city' => $xieyi->city->name,
            ]
        );
        return back();
    }

    /**
     *
     *
     */
    public function delete(Request $request)
    {
        $settledate = $request->input('settledate');
        $item = $request->input('item');
        $zuoxf_id = $request->input('zuoxf_id');

//dd($zuoxf_id);
        if($zuoxf_id){
            Zuoxf::when($zuoxf_id, function ($query, $zuoxf_id) {
                return $query->where('id', $zuoxf_id);
            }) ->delete();
        }

        DB::table('zuoxf_renlbs')
            ->where('settledate','=', $settledate)
            ->where('item','=', $item)
            ->delete();

        return back();
    }
}