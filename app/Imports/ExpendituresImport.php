<?php

namespace App\Imports;

use App\Models\Expenditure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ExpendituresImport implements ToModel, WithCalculatedFormulas//导入的是公式计算的结果
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return Expenditure::updateOrCreate(
            [
                'date' => $row[1],
                'category' => $row[1],
                'Major_subject' => $row[1],
                'Secondary_subject' => $row[1],
//                'item_id' => $row[1],
                'item_name' => $row[1],
//                'city_id' => $row[1],
//                'partner_id' => $row[1],
                'cost' => $row[1],
            ]
        );
    }
}
