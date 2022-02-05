<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChoiceUsRequest;
use App\Http\Requests\ServiceRequest;
use App\Repositories\Eloquent\ChoiceUsRepository;
use App\Repositories\Eloquent\ServiceRepository;
use App\ServicItem;
use Illuminate\Http\Request;

class ChoiceUsController extends Controller
{
    protected $ChoiceUs;
    public function __construct(ChoiceUsRepository $ChoiceUs)
    {
        $this->ChoiceUs = $ChoiceUs;
    }
    public function choiceuspage()
    {
        $ChoiceUs=\App\ChoiceUs::find(1);
       return view('cpanel.choiceus',compact('ChoiceUs'));
    }
    public function update_choiceus(ChoiceUsRequest $request)
    {
        $this->ChoiceUs->store($request->all());
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }
}
