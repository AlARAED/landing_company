<?php
namespace App\Repositories\Eloquent;
use App\AboutUs;
use App\Repositories\Interfaces\OrderRepositoryInterface;

use App\Service;
use App\Repositories\interfaces\ServiceRepositoryInterface;
use http\Env\Response;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function store(array $input){
//        Service::create($input);
        $Service=Service::find(1);

        if($input['title']) $Service->title =$input['title'];
        if($input['text']) $Service->text =$input['text'];
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
                $Service->image =$new_au;

            }

        $Service->save();




    }



}



?>
