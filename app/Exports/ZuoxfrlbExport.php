<?php

namespace App\Exports;

use App\Models\Zuoxf_renlb;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class ZuoxfrlbExport implements FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function view():View
//    {
//        return view('zuoxf_renlb.zuoxfrlbView', [
//            // 这里的'zuoxfs'，对应的是blade页面'zuoxf.exportView.blade.php'的foreach的$zuoxfs
//            'zuoxf_renlbs' => Zuoxf_renlb::all()
//        ]);
//    }

    use Exportable;
    public function filter(string $export_settledate , int $export_settle_intermediary_id){
        $this->export_settledate = $export_settledate;
        $this->export_settle_intermediary_id = $export_settle_intermediary_id;
        return $this;
    }

    public function query(){
        $test = Zuoxf_renlb::query()
            ->where('settledate',$this->export_settledate )
            ->where('settle_intermediary_id',$this->export_settle_intermediary_id);
//        dd($test);
        return Zuoxf_renlb::query()
            ->select('settledate','item','sales_id','name','job','status','train_date','entry_date','online_date','position')
            ->where('settledate',$this->export_settledate )
            ->where('settle_intermediary_id',$this->export_settle_intermediary_id);
    }
}
