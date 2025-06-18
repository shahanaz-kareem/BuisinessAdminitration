<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Product;
class MainViewService
{

    public function index()
    {
        $status = config('default.product_approval');
        $products = Product::with('images')->where('approval_status',$status['2'])->get();
        return view('user.welcome',compact('products'));

    }

}