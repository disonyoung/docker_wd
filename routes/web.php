<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get('/login','login.login');

//用户登录
Route::middleware('auth')->group(function (){
    //首页
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

    //坐席费zuoxf
    Route::get('/zuoxfs',[\App\Http\Controllers\ZuoxfController::class, 'index'])
        ->name('zuoxf.index');

    Route::post('/zxf_add',[\App\Http\Controllers\ZuoxfController::class, 'add'])
        ->name('zxf_add');

    Route::get('/zuoxf_export',[\App\Http\Controllers\ZuoxfController::class, 'export'])
        ->name('zuoxf_export');

    Route::get('/zuoxf_hedui',[\App\Http\Controllers\ZuoxfController::class, 'hedui'])
        ->name('zuoxf_hedui');

    Route::post('/zuoxf_hedui_filter',[\App\Http\Controllers\ZuoxfController::class, 'hedui'])
        ->name('zuoxf_hedui_filter');

    Route::post('/zuoxf_hedui_export',[\App\Http\Controllers\ZuoxfController::class, 'hedui_export'])
        ->name('zuoxf_hedui_export');


//导入坐席费人力表zuoxfrenlb
    Route::get('/zuoxf_renlb', [\App\Http\Controllers\Zuoxf_renlbController::class, 'index'])
            ->name('zuoxfRenlb');

    Route::post('/zuoxf_renlb', [\App\Http\Controllers\Zuoxf_renlbController::class, 'index'])
        ->name('zuoxfRenlb');

    Route::post('/zuoxf_renlb_export', [\App\Http\Controllers\Zuoxf_renlbController::class, 'index_export'])
        ->name('zxfrlb_index_export');

    Route::post('/zuoxf_renlib_import',[\App\Http\Controllers\Zuoxf_renlbController::class, 'import'])
        ->name('import');

    Route::get('/zuoxf_renlib_zl',[\App\Http\Controllers\Zuoxf_renlbController::class, 'zhengli'])
        ->name('zxf_rlb_zl');

    Route::post('/zuoxf_renlib_zl',[\App\Http\Controllers\Zuoxf_renlbController::class, 'delete'])
        ->name('zxf_rlb_del');

    Route::post('/zuoxf_renlib_update',[\App\Http\Controllers\Zuoxf_renlbController::class, 'update'])
        ->name('zxf_rlb_update');

    Route::get('/zuoxf_renlib_hedui',[\App\Http\Controllers\Zuoxf_renlbController::class, 'hedui'])
        ->name('zxf_rlb_hedui');

//协议表xie yi
    Route::get('/xieyis',[\App\Http\Controllers\XieyiController::class, 'index'])
        ->name('xieyi.index');

    Route::get('/xieyis_create',[\App\Http\Controllers\XieyiController::class, 'create'])
        ->name('xieyi_create');

    Route::post('/xieyis_store',[\App\Http\Controllers\XieyiController::class, 'store'])
        ->name('xieyi_store');

    //项目别名item by name
    Route::get('/itembyname/index/xieyi/{xieyi_id}',[\App\Http\Controllers\ItemBynameController::class, 'index'])
        ->name('itembyname.index.xieyi_id');//通过协议id查看项目别名

    Route::get('/itembyname/create/xieyi/{xieyi_id}',[\App\Http\Controllers\ItemBynameController::class, 'create'])
        ->name('itembyname.create.xieyi_id');//去新增页面-带协议id

    Route::post('/itembyname/store/',[\App\Http\Controllers\ItemBynameController::class, 'store'])
        ->name('itembyname.store');//去新增页面-带协议id

    //项目item
    Route::get('/items',[\App\Http\Controllers\ItemController::class, 'index'])
        ->name('item.index');//项目列表页

});

