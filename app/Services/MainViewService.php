<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Product;
use App\Models\User;


class MainViewService
{

    public function index()
    {
        $status = config('default.product_approval');
        $type = config('default.user_type');
        $products = Product::with('images')->where('approval_status',$status['2'])->get();
        $users = User::where('id', '!=', auth()->id())->where('user_type', '=', $type['user'])->get();

        return view('user.home',compact('products','users'));

    }

}