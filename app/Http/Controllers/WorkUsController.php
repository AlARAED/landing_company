<?php

namespace App\Http\Controllers;

use App\ChoiceUsItem;
use App\Http\Requests\ServiceItemRequest;
use App\Repositories\Eloquent\ChoiceUsItemRepository;
use App\Repositories\Eloquent\WorkUsRepository;
use App\WorkUs;
use Illuminate\Http\Request;

class WorkUsController extends Controller
{
    protected $workus;
    public function __construct(WorkUsRepository $workus)
    {
        $this->workus = $workus;
    }


    public function workuspage()
    {

        $WorkUs=WorkUs::find(1);
        return view('cpanel.workus',compact('WorkUs'));
    }

    public function update_workus(Request $request)
    {

        $this->workus->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }


}
