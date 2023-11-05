<?php

namespace App\Imports;

use App\Models\Zuoxf_renlb;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
//use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Zuoxf_renlbsImport implements ToModel, WithCalculatedFormulas//导入的是公式计算的结果
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function model(array $row)
    {
        if($row[0] == "期间" or $row[0] == null){//判断发现第一列是"期间"说明是表头,跳过,判断是空值,跳过;
            return null;
        }else{
            return Zuoxf_renlb::updateOrCreate(
                [
                    'settledate' => \Carbon\Carbon::parse('1900-1-1')->addDays($row[0])->format('Y-m'),
                    'item' => $row[1],
                    'sales_id' => $row[2],
                    'name' => $row[3],
                ], [
                    'job' => $row[4],
                    'status' => $row[5],
                    'train_date' => \Carbon\Carbon::parse('1900-1-1')->addDays($row[6])->format('Y-m-d'),
                    'entry_date' => \Carbon\Carbon::parse('1900-1-1')->addDays($row[7])->format('Y-m-d'),
                    'online_date' => \Carbon\Carbon::parse('1900-1-1')->addDays($row[8])->format('Y-m-d'),
                    'position' => $row[9],
                ]
            );
        }


//        return new Zuoxf_renlb([
//            //
//            'settledate' => $row[0],
//            'item' => $row[1],
//            'sales_id' => $row[2],
//            'name' => $row[3],
//            'job' => $row[4],
//            'status' => $row[5],
//            'train_date' => $row[6],
//            'entry_date' => $row[7],
////            'lzriqi' => $row[0],
//            'online_date' => $row[8],
//            'position' => $row[9],
////
//        ]);
    }

}
