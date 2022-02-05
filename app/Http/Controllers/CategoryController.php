<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Eloquent\ReviewRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $Category;
    public function __construct(CategoryRepository $Category)
    {
        $this->Category = $Category;
    }
    public function categorypage()
    {
        $Category=Category::all();
        return view('cpanel.category',compact('Category'));
    }

    public function store_category(Request $request)
    {

        $this->Category->store($request->all());
        return redirect()->back()->with('message', 'تم اضافة  بنجاح !');
    }

    public function update_category(Request $request,$id)
    {

        $this->Category->update($request->all(),$id);
        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }

    public function delete_category($id)
    {

        $this->Category->delete($id);
        return redirect()->back()->with('message', 'تم الحذف  بنجاح !');
    }




}
