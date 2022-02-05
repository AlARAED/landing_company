<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceItemRequest;
use App\Repositories\Eloquent\ServiceItemRepostory;
use App\Repositories\Eloquent\WorkUsItemRepository;
use App\WorkUsImage;
use Illuminate\Http\Request;

class WorkUsItemController extends Controller
{
    protected $workusitem;
    public function __construct(WorkUsItemRepository $workusitem)
    {
        $this->workusitem = $workusitem;
    }


    public function workusitempage()
    {
        $WorkUsIma=WorkUsImage::find(1);


        return view('cpanel.workusitem',compact('WorkUsIma'));
    }
    public function update_workusitem(Request $request)
    {

        $this->workusitem->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }


}
