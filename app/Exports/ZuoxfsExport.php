<?php

namespace App\Exports;

use App\Models\Zuoxf;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

//use Maatwebsite\Excel\Concerns\FromCollection;

class ZuoxfsExport implements FromView
{
    /**
    *
    */
    public function view():View
    {
        return view('zuoxf.exportView', [
            // 这里的'zuoxfs'，对应的是blade页面'zuoxf.exportView.blade.php'的foreach的$zuoxfs
            'zuoxfs' => Zuoxf::all()
        ]);
    }
}
