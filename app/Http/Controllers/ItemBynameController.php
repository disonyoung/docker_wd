<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemByname;
use App\Models\xieyi;
use Illuminate\Http\Request;

class ItemBynameController extends Controller
{
    //查看页
    public function index($xieyi_id){
        $itemBynames = ItemByname::where('xieyi_id',$xieyi_id)
            ->get();
        return view('item.byname.index',['itembynames'=> $itemBynames, 'xieyi_id'=>$xieyi_id]);
    }
    //去新增页面 带协议id
    public function create($xieyi_id){
        $xieyi = xieyi::where('id',$xieyi_id)->get();
        $items = Item::all();
        return view('item.byname.create',['xieyi'=> $xieyi, 'items'=>$items]);
    }

    //存 项目别名
    public function store(Request $request){
//        dd($request);
        $itembyname = new ItemByname();
        $itembyname->fill([
            'item_byname' => $request->input('itembyname'),
            'item_id'=> $request->input('item_id'),
            'xieyi_id'=> $request->input('xieyi_id'),
        ]);
        $itembyname->save();

        return back();
    }
}
