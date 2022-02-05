<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\PartnerImageRepository;
use App\Repositories\Eloquent\PartnerRepository;
use Illuminate\Http\Request;

class PartnerImageController extends Controller
{
    protected $partnerimage;
    public function __construct(PartnerImageRepository $partnerimage)
    {
        $this->partnerimage = $partnerimage;
    }

    public function storeiimage(Request $request)
    {

        $this->partnerimage->store($request->all());
        return redirect()->back()->with('message', 'تم اضافة  بنجاح !');
    }

    public function delete_partnerimage(Request $request,$id)
    {

        $this->partnerimage->delete($id);
        return redirect()->back()->with('message', 'تم الحذف  بنجاح !');
    }



}
