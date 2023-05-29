<?php

namespace App\Imports;

use App\Models\Renlb;
use Maatwebsite\Excel\Concerns\ToModel;

class RenlbsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Renlb([
            //

        ]);
    }
}
