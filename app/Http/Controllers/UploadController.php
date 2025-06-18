<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UploadService;



class UploadController extends Controller
{
        protected $ProductServices;
    function __construct(UploadService $UploadServices)

    {

         $this->UploadServices = $UploadServices;

    }
    public function index(){
        return $this->UploadServices->index();
    }

     public function store(Request $request)
     {
         return $this->UploadServices->store($request);
     }
     
}
