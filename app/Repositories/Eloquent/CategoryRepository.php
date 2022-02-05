<?php
namespace App\Repositories\Eloquent;
use App\Repositories\interfaces\CategoryRepositoryInterface;

use App\Category;

use Illuminate\Http\Request;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function store(array $input)
    {
        $Category= new Category();
        $Category->name=$input['name'];
        $Category->save();
 }


    public function update(array $input,$id)
    {

        $Category = Category::find($id);
        $Category->name=$input['name'];
        $Category->save();

    }


    public function delete($id){

        $Category=Category::find($id);
        $Category->delete();

    }

}



?>
