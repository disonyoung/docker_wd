<?php

namespace App\Imports;

use App\Models\Zuoxf;
use Maatwebsite\Excel\Concerns\ToModel;

class ZuoxfsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Zuoxf([
            //

        ]);
    }
}
