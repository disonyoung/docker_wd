<?php

namespace App\Http\Controllers;

use App\Models\xieyi;
use Illuminate\Http\Request;

class XieyiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xieyis = xieyi::all();

        return view('xieyi.index', ['xieyis' => $xieyis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('xieyi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//保存协议
    {
        $xieyi = new xieyi();
        $xieyi->fill([
           'agreement' => $request->input('agreement'),
           'intermediary_id' => $request->input('intermediary_id'),
           'settle_intermediary_id' => $request->input('settle_intermediary_id'),
           'partner_id' => $request->input('partner_id'),
           'city_id' => $request->input('city_id'),
           'type' => $request->input('type'),
           'price' => $request->input('price'),
           'rule' => $request->input('rule'),
        ]);
        $xieyi->save();

        $xieyis = xieyi::all();//保存完协议后,查询出所有协议返回协议首页
        return view('xieyi.index', ['xieyis' => $xieyis]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
