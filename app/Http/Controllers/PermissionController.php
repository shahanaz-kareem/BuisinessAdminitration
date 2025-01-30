<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PermissionService;


class PermissionController extends Controller
{
    protected $Permissionservice;

    public function __construct(PermissionService $Permissionservices)
    {
        $this->Permissionservices = $Permissionservices;
    }

    public function store(Request $request){
        return $this->Permissionservices->store($request);
    }

    public function destroy($id){
        return $this->Permissionservices->destroy($id);
    }
}
