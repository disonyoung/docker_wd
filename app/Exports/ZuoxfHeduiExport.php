<?php

namespace App\Exports;
//namespace App\Exports\Sheets;

use App\Exports\Sheets\ZuoxfAndRenlbSheet;
use App\Models\Zuoxf;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ZuoxfHeduiExport implements WithMultipleSheets
{
    use Exportable;

    private $export_settledate;
    private $export_settle_intermediary_id;
    private $intermediary_name;

    public function __construct(string $export_settledate, int $export_settle_intermediary_id,string $intermediary_name)
    {
        $this->export_settledate = $export_settledate;
        $this->export_settle_intermediary_id  = $export_settle_intermediary_id;
        $this->intermediary_name = $intermediary_name;
    }

//    public function filter(string $export_settledate , int $export_settle_intermediary_id, string $intermediary_name){
//        $this->export_settledate = $export_settledate;
//        $this->export_settle_intermediary_id = $export_settle_intermediary_id;
//        $this->intermediary_name = $intermediary_name;
//        return $this;
//    }

    public function sheets(): array
    {
        $sheets = [];
            $sheets[] = new ZuoxfAndRenlbSheet(1,$this->export_settledate, $this->export_settle_intermediary_id ,$this->intermediary_name);
            $sheets[] = new ZuoxfAndRenlbSheet(2,$this->export_settledate, $this->export_settle_intermediary_id ,$this->intermediary_name);
        return $sheets;
    }
}
