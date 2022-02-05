<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Repositories\interfaces\AboutUsRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;

use App\AboutUs;

class AboutUsRepository implements AboutUsRepositoryInterface
{
    public function store(array $input){
        $aboutUs=AboutUs::find(1);

        if($input['title']) $aboutUs->title =$input['title'];
        if($input['text']) $aboutUs->text =$input['text'];
        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_au= uniqid() . "." . $ext;


                $path = $input['image']->move('uploads',$new_au);
            }
        }

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $aboutUs->image =$new_au;

            }

        $aboutUs->save();


    }



}



?>
