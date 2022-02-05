<?php

namespace App\Http\Controllers;

use App\Http\Requests\admin\UserRequest;
use App\Http\Requests\CompanyInformationRequest;
use App\Repositories\Eloquent\CompanyInfoRepository;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Http\Request;
use App\CompanyInformation;

class CompanyInformationController extends Controller
{
    protected $CompanyInfo;
    public function __construct(CompanyInfoRepository $CompanyInfo)
    {
        $this->CompanyInfo = $CompanyInfo;
    }

    public function Companyinfo(CompanyInformationRequest $request)
    {
        $this->CompanyInfo->store($request->all());

        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }
    public function setting()
    {
        $com=CompanyInformation::find(1);
        return view('cpanel.accountsetting',compact('com'));
    }


}
