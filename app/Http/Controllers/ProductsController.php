<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest as Request; //usando Request Personalizada de Product
use Illuminate\Http\Request as ResquestPadrao;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResquestPadrao $request)
    {
        //pega opcao de where (url?where[campo]=valor -> url?where[id]=3)
        $where = $request->all()['where'] ?? [];
        //pega opcao de ordenamento q foi enviado pela URL (se nao tive sido passada nenhuma, entao é nulo) (url?order=local,desc)
        $order = $request->all()['order'] ?? null;

        if($order != null){
            $order = explode(',', $order);
        }

        $order[0] = $order[0] ?? 'id';
        $order[1] = $order[1] ?? 'asc';

        $produtos = Product::orderBy($order[0], $order[1])->where($where)->get();

        return response()->json($produtos);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $product;
    }
}
