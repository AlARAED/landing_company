<?php
namespace App\Repositories\Eloquent;
use App\Repositories\interfaces\PartnerImageRepositoryInterface;
use App\PartnerImage;

class PartnerImageRepository  implements PartnerImageRepositoryInterface
{  public function store(array $input)
    {
        $PartnerIma= new PartnerImage();

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
                $PartnerIma->image = $new_au;

            }
        }
        $PartnerIma->save();
    }



    public function delete($id){

        $PartnerImage=PartnerImage::find($id);
        $PartnerImage->delete();

    }


    }




?>
