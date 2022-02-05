<?php

namespace App\Http\Controllers\Site;

use App\Category;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $com=\App\CompanyInformation::find(1);
        $aboutUs=\App\AboutUs::find(1);
        $Service=\App\Service::find(1);
        $Serviceitem=\App\ServicItem::all();
        $ChoiceUs=\App\ChoiceUs::find(1);
        $WorkUs=\App\WorkUs::find(1);
        $WorkUsImage=\App\WorkUsImage::find(1);
        $Partner=\App\Partner::find(1);
        $PartnerImage=\App\PartnerImage::all();
        $Review=Review::all();
        $Category=Category::all();

     return view('index',compact('com','aboutUs','Service','Serviceitem','ChoiceUs','WorkUs','WorkUsImage','Partner','PartnerImage','Review','Category'));
    }
}
