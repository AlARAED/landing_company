<?php
namespace App\Repositories\Eloquent;
use App\Repositories\interfaces\WorkUsItemRepositoryInterface;
use App\WorkUsImage;

class WorkUsItemRepository implements WorkUsItemRepositoryInterface
{

    public function update(array $input){

        $WorkUsImage=WorkUsImage::find(1);
        //FIRST IMAGE::////////////////
        if (isset($input['image_1'])) {
            $ext = pathinfo($input['image_1']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_au= uniqid() . "." . $ext;


                $path = $input['image_1']->move('uploads',$new_au);
            }
        }

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $WorkUsImage->image_1 =$new_au;

            }





        //SECOND IMAGE:://////////////////////
        if (isset($input['image_2'])) {
            $ext = pathinfo($input['image_2']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_ausecond= uniqid() . "." . $ext;


                $path = $input['image_2']->move('uploads',$new_ausecond);
            }
        }

        if(isset($new_ausecond))
            if ($new_ausecond != ''  or $new_ausecond != null) {
                $WorkUsImage->image_2 =$new_ausecond;

            }


        //THIRD IMAGE:://////////////////////////////////////
        if (isset($input['image_3'])) {
            $ext = pathinfo($input['image_3']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_authird= uniqid() . "." . $ext;


                $path = $input['image_3']->move('uploads',$new_authird);
            }
        }

        if(isset($new_authird))
            if ($new_authird != ''  or $new_authird != null) {
                $WorkUsImage->image_3 =$new_authird;

            }

        //FOURTH IMAGE:://////////////////////////////

        if (isset($input['image_4'])) {
            $ext = pathinfo($input['image_4']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_aufourth= uniqid() . "." . $ext;


                $path = $input['image_4']->move('uploads',$new_aufourth);
            }
        }

        if(isset($new_aufourth))
            if ($new_aufourth != ''  or $new_aufourth != null) {
                $WorkUsImage->image_4 =$new_aufourth;

            }


        //FIFTH IMAGE::////////////////////////
        if (isset($input['image_5'])) {
            $ext = pathinfo($input['image_5']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_aufifth= uniqid() . "." . $ext;


                $path = $input['image_5']->move('uploads',$new_aufifth);
            }
        }

        if(isset($new_aufifth))
            if ($new_aufifth != ''  or $new_aufifth != null) {
                $WorkUsImage->image_5 =$new_aufifth;

            }

        //SIXTH IMAGE::///////////////////////////
        if (isset($input['image_6'])) {
            $ext = pathinfo($input['image_6']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_ausixth= uniqid() . "." . $ext;


                $path = $input['image_6']->move('uploads',$new_ausixth);
            }
        }

        if(isset($new_ausixth))
            if ($new_ausixth != ''  or $new_ausixth != null) {
                $WorkUsImage->image_6 =$new_ausixth;

            }
        //SIVENTH IMAGE::///////////////////////////////////////////
        if (isset($input['image_7'])) {
            $ext = pathinfo($input['image_7']->getClientOriginalName(),
                PATHINFO_EXTENSION);


            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {

                $new_ausivnth= uniqid() . "." . $ext;


                $path = $input['image_7']->move('uploads',$new_ausivnth);
            }
        }

        if(isset($new_ausivnth))
            if ($new_ausivnth != ''  or $new_ausivnth!= null) {
                $WorkUsImage->image_7 =$new_ausivnth;

            }
        //THE END




        $WorkUsImage->save();


    }

}


?>
