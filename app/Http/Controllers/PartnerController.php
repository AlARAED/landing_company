<?php

namespace App\Http\Controllers;

use App\PartnerImage;
use App\Repositories\Eloquent\PartnerRepository;
use App\Repositories\Eloquent\WorkUsRepository;
use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    protected $partner;
    public function __construct(PartnerRepository $partner)
    {
        $this->partner = $partner;
    }


    public function partnerpage()
    {

        $Partner=Partner::find(1);
        return view('cpanel.partner',compact('Partner'));
    }

    public function partnerimagepage()
    {

        $PartnerImage=PartnerImage::all();
        return view('cpanel.partnerimage',compact('PartnerImage'));
    }
    public function update_Partner(Request $request)
    {

        $this->partner->update($request->all());
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }

}
