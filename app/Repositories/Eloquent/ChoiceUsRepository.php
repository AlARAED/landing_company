<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Repositories\interfaces\AboutUsRepositoryInterface;
use App\Repositories\interfaces\ChoiceUsRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;

use App\AboutUs;
use App\ChoiceUs;

class ChoiceUsRepository implements ChoiceUsRepositoryInterface
{
    public function store(array $input)
    {
     $ChoiceUs=ChoiceUs::find(1);

        if($input['text']) $ChoiceUs->text =$input['text'];
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
                $ChoiceUs->image =$new_au;

            }

        $ChoiceUs->save();




    }


}


?>
