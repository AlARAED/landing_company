<?php

namespace App\Http\Controllers;

use App\ChoiceUsItem;
use App\Http\Requests\ChoiceUsItemRequest;
use App\Http\Requests\ServiceItemRequest;
use App\Http\Requests\ServiceRequest;
use App\Repositories\Eloquent\ChoiceUsItemRepository;
use App\Repositories\Eloquent\ServiceItemRepostory;
use App\Repositories\Eloquent\ServiceRepository;
use App\ServicItem;
use Illuminate\Http\Request;

class ChoiceUsItemController extends Controller
{
    protected $choiceusItem;
    public function __construct(ChoiceUsItemRepository $choiceusItem)
    {
        $this->choiceusItem = $choiceusItem;
    }


    public function choiceitempage()
    {
        $ChoiceUsItem=ChoiceUsItem::all();


        return view('cpanel.Choiceusitem',compact('ChoiceUsItem'));
    }

    public function store_choiceusitem(ChoiceUsItemRequest $request)
    {
        $this->choiceusItem->store($request->all());
        return redirect()->back()->with('message', 'تم اضافة  بنجاح !');
    }


    public function update_choiceitem(ChoiceUsItemRequest $request,$id)
    {

        $this->choiceusItem->update($request->all(),$id);
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }
    public function delete_choiceitem ($id)
    {

        $this->choiceusItem->delete($id);
        return redirect()->back()->with('message', 'تم الحذف  بنجاح !');
    }


}
