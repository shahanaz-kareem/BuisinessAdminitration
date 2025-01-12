<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MainViewService;

class MainViewController extends Controller
{
    protected $DaytypeServices;

    public function __construct(MainViewService $MainViewServices)
    {
        $this->MainViewServices = $MainViewServices;
    }

    public function index()
    {
       return $this->MainViewServices->index();

    }


}
