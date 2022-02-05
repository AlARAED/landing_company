<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\ReviewRepository;
use App\Repositories\Eloquent\ServiceItemRepostory;
use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    protected $Review;
    public function __construct(ReviewRepository $Review)
    {
        $this->Review = $Review;
    }


    public function Reviewpage()
    {
        $Review=Review::all();
        return view('cpanel.review',compact('Review'));
    }

    public function store_review(Request $request)
    {

        $this->Review->store($request->all());
        return redirect()->back()->with('message', 'تم اضافة  بنجاح !');
    }

    public function update_review(Request $request,$id)
    {

        $this->Review->update($request->all(),$id);
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }

    public function delete_review($id)
    {

        $this->Review->delete($id);
        return redirect()->back()->with('message', 'تم الحذف  بنجاح !');
    }
}
