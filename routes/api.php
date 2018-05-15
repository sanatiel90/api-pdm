<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//rotas da api; o uso de 'resource' faz com que, usando o endpoint api/v1/products, sejam usados os metodos padrao
//de api(store,show,index,update,destroy) do controller ProductsController, de acordo com o metodo fornecido
Route::prefix('v1')->group(function (){
        Route::resource('products', 'ProductsController');
});
