<?php
namespace App\Repositories\Eloquent;
use App\Repositories\interfaces\ReviewRepositoryInerface;
use App\Review;
use App\ServicItem;
use App\WorkUsImage;
use Illuminate\Http\Request;

class ReviewRepository implements ReviewRepositoryInerface
{

    public function store(array $input)
    {
        $Review= new Review();
        $Review->text=$input['text'];
        $Review->signiture=$input['signiture'];
        //$input['image']?$ext = pathinfo($input['image']->getClientOriginalName(),PATHINFO_EXTENSION);
        if ($input['image']) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_au= uniqid() . "." . $ext;
       $path = $input['image']->move('uploads',$new_au);
            }
        }

        if($new_au) {
            if ($new_au != '' or $new_au != null) {
                $Review->image = $new_au;

            }
        }
        $Review->save();


    }


    public function update(array $input,$id)
    {

        $Review = Review::find($id);
        $Review->text=$input['text'];
        $Review->signiture=$input['signiture'];
        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_au= uniqid() . "." . $ext;


                $path = $input['image']->move('uploads',$new_au);
            }
        }

        if(isset($new_au)) {
            if ($new_au != '' or $new_au != null) {
                $Review->image = $new_au;

            }
        }
        $Review->save();

    }


    public function delete($id){

        $Review=Review::find($id);
        $Review->delete();

    }

}



?>
