<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderServiceRequest;
use App\Http\Requests\ServiceRequest;
use App\Repositories\Eloquent\OrderRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\ServicItem;
use GuzzleHttp\Psr7\ServerRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    protected $service;
    public function __construct(ServiceRepository $service)
    {
        $this->service = $service;
    }
    public function servicepage()
    {
        $Service=\App\Service::find(1);
        $ServicItem=ServicItem::all();


   return view('cpanel.Service',compact('Service','ServicItem'));
    }
   public function update_service(ServiceRequest $request)
    {
      $this->service->store($request->all());
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }

}
