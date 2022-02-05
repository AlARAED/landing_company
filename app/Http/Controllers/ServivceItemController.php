<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceItemRequest;
use App\Http\Requests\ServiceRequest;
use App\Repositories\Eloquent\ServiceItemRepostory;
use App\Repositories\Eloquent\ServiceRepository;
use App\ServicItem;
use Illuminate\Http\Request;

class ServivceItemController extends Controller
{
    protected $serviceItem;
    public function __construct(ServiceItemRepostory $serviceItem)
    {
        $this->serviceItem = $serviceItem;
    }


    public function Serviceitempage()
    {
        $ServicItem=ServicItem::all();


        return view('cpanel.serviceitem',compact('ServicItem'));
    }

    public function store_serviceitem(ServiceItemRequest $request)
    {
        $this->serviceItem->store($request->all());
        return redirect()->back()->with('message', 'تم اضافة  بنجاح !');
    }


    public function update_serviceitem(ServiceItemRequest $request,$id)
    {

           $this->serviceItem->update($request->all(),$id);
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }
    public function delete_serviceitem($id)
    {

          $this->serviceItem->delete($id);
        return redirect()->back()->with('message', 'تم الحذف  بنجاح !');
    }


}
