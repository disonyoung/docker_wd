<?php
namespace App\Exports\Sheets;

use App\Models\Zuoxf;
use App\Models\Zuoxf_renlb;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ZuoxfAndRenlbSheet implements FromQuery, WithTitle,WithHeadings,WithStyles
{
    private $sheets;
    private $export_settledate;
    private $export_settle_intermediary_id;
    private $intermediary_name;

    public function __construct(int $sheets, string $export_settledate, int $export_settle_intermediary_id,string $intermediary_name)
    {
        $this->sheets = $sheets;
        $this->export_settledate = $export_settledate;
        $this->export_settle_intermediary_id  = $export_settle_intermediary_id;
        $this->intermediary_name = $intermediary_name;
    }

    public function headings(): array
    {
        $intermediary_name = $this->intermediary_name;
        if($this->sheets == 1){
            return [
                ['结算期间', '地区',$intermediary_name.'项目人力明细',$intermediary_name.'项目人力明细',$intermediary_name.'项目人力明细',$intermediary_name.'项目人力明细','结算席位'],
                ['结算期间', '地区','销售职','管理职','服务职','大运营','结算席位'],
            ];
        }elseif($this->sheets == 2){
            return [
                ['期间', '项目名称','BD工号','姓名','职位','状态','参训日期','入职日期','上线时间','岗位类别'],
            ];
        }

    }

    public function styles(Worksheet $sheet)
    {
        if($this->sheets == 1){
            $sheet->mergeCells('A1:A2');//结算周期
            $sheet->mergeCells('B1:B2');//地区
            $sheet->mergeCells('C1:F1');//恒丰项目人力明细 4格合并单元格
            $sheet->mergeCells('G1:G2');//结算席位
            $row = Zuoxf::where('settledate', $this->export_settledate)
                ->where('settle_intermediary_id',$this->export_settle_intermediary_id)
                ->groupby('settledate','settle_intermediary','city_id')->get()->count();
            for ($i = 0; $i<=$row+2; $i++) {

                $sheet->getStyle($i)->getAlignment()->setVertical('center');//设置区域单元格垂直居中
                $sheet->getStyle($i)->applyFromArray([
                    'font' => [
                        'name' => '方正楷体',
                        'size' => '11',
                        'bold' => true,
                        'italic' => false,
                        'strikethrough' => false,
                        'color' => [
                            'rgb' => '273646'//字体颜色
                        ]
                    ],
                ]);
            }
            $sheet->getStyle('A1:G'.$i-1)->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '273646'],
                    ],
//                'outline' => [
//                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
//                    'color' => ['argb' => '273646'],
//                ],
                ],
            ]);
            $sheet->getStyle('A1:G'.$i-1)->applyFromArray([
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                        'color' => ['argb' => '273646'],
                    ],
//                'outline' => [
//                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
//                    'color' => ['argb' => '273646'],
//                ],
                ],
            ]);
            $sheet->getStyle('A1:G2')->applyFromArray([
                'font' => [
                    'name' => '方正楷体',
                    'size' => '13',
                ],
                'fill' => [
                    'fillType' => 'linear', //线性填充，类似渐变
                    'rotation' => 45, //渐变角度
                    'startColor' => [
                        'rgb' => '008C85' //初始颜色
                    ],
                    //结束颜色，如果需要单一背景色，请和初始颜色保持一致
                    'endColor' => [
                        'argb' => '008C85'
                    ]
                ]
            ]);
        }elseif($this->sheets == 2){
            //
        }else{
            //
        }
    }
    /**
    * @return Builder|\Illuminate\Database\Eloquent\Builder
    */
    public function query()
    {
        if($this->sheets == 1){//导出坐席费核对账单,例如华康2023年1月,几个城市的坐席费使用情况.
            return Zuoxf::query()
                ->select([
                    'settledate',
//            'settle_intermediary',
                    'city',
                    \DB::raw('sum(sales) as sales'),
                    \DB::raw('sum(managers) as managers'),
                    \DB::raw('sum(services) as services'),
                    \DB::raw('sum(rear_services) as rear_services'),
                    \DB::raw('sum(manpower) as manpower'),
//            \DB::raw('sum(amount) as amount'),
                ])->where('settledate', $this->export_settledate)
                ->where('settle_intermediary_id',$this->export_settle_intermediary_id)
                ->groupby('settledate','settle_intermediary','city_id');
        }elseif($this->sheets == 2){//导出坐席费使用明细,例如华康2023年1月,所有销售,管理,服务,运营人员明细
            return Zuoxf_renlb::query()
                ->select('settledate','item','sales_id','name','job','status','train_date','entry_date','online_date','position')
                ->where('settledate',$this->export_settledate )
                ->where('settle_intermediary_id',$this->export_settle_intermediary_id);
        }

    }

    /**
    * @return string
    */
    public function title(): string
    {
//        $date = \Carbon\Carbon::parse('1900-1-1')->addDays($this->export_settledate)->format('Y-m');
        $date =$this->export_settledate;
        if($this->sheets == 1){
            return $this->intermediary_name.$date.'对账单:';
        }elseif($this->sheets == 2){
            return $this->intermediary_name.$date.'人员明细:';
        }else{
            return 'sheet';
        }
    }
}
