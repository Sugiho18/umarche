<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\SecondaryCategory;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');//オーナーかどうか確認
            
        $this->middleware(function($request,$next){

            $id = $request->route()->parameter('product');
            if(!is_null($id)){ 
                $productsOwnerId = Product::findOrFail($id)->shop->owner->id; 
                $productId = (int)$productsOwnerId; 
                // productのユーザーidと現在ログインしているユーザーのidが違う場合エラー画面に遷移
                if($productId !== Auth::id()){
                    abort(404); 
                }
            }
            return $next($request); 
            });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Owner::findOrFail(Auth::id())->shop->product;  //SQLが多くなるコード
        $ownerInfo = Owner::with('shop.product.imageFirst')
        ->where('id',Auth::id())->get();

        return view('owner.products.index', compact('ownerInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
