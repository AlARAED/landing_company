<?php

namespace App\Http\Controllers\Site;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderServiceRequest;
use App\Repositories\Eloquent\OrderRepository;
use Illuminate\Http\Request;
use App\Repostries\Repository;
use App\Repositories\Interfaces\OrderRepositoryInterface;
//use SweetAlert;
//use Response;
//use App\Providers\SweetAlertServiceProvider;
use UxWeb\SweetAlert\SweetAlert;

//use App\Providers\SweetAlertServiceProvider;
use App\Order;



class OrderServiceController extends Controller
{


     protected $order;
      public function __construct(OrderRepository $order)
    {
        $this->order = $order;
    }

    public function orderpage()
    {

        $Order=Order::all();

return view('cpanel.order',compact('Order'));
}


     public function create(OrderServiceRequest $request)
    {
      $this->order->store($request->all());
        $response='شكراَ لك !تم ارسال طلبك بنجاح سنعاود الاتصال بك قريب';
        return response()->json($response);
     }



}
