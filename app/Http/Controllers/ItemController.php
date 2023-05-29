<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //首页
    public function index(){
        $items = Item::all();
        return view('item.index',['items' => $items]);
    }
}
