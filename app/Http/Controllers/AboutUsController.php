<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutusRequest;
use App\Http\Requests\CompanyInformationRequest;
use App\Repositories\Eloquent\AboutUsRepository;
use App\Repositories\Eloquent\CompanyInfoRepository;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    protected $aboutus;
    public function __construct(AboutUsRepository $aboutus)
    {
        $this->aboutus = $aboutus;
    }
    public function aboutpage()
    {
        $aboutUs=\App\AboutUs::find(1);
        return view('cpanel.aboutus',compact('aboutUs'));
    }
    public function about_us(AboutusRequest $request)
    {
        $this->aboutus->store($request->all());

        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }
}
