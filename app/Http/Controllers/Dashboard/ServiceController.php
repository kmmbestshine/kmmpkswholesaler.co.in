<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Carbon\Carbon;
use DB;
use App\Assignment;
use App\Http\Requests;
use App\Http\Requests\OrderRequest;
use App\Order;
use App\Rating;
use App\Material;
use App\User;

use Gate;

use Mail;
use Yajra\Datatables\Facades\Datatables;

class ServiceController extends Controller
{
   public function serviceorderlist(Request $request)
    {
    	//dd('gggggg');
        $to = Carbon::today();
        $from = Carbon::today()->subWeek();
        

        //Graph for only titles users ...
        $count = collect([]);
        
       
       
dd($to,$count);
        return view('dashboard.service.index', compact('count') ;
    }
}
