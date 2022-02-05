<?php
namespace App\Repositories\Eloquent;
use App\Repositories\interfaces\CompanyInfoRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;

use App\CompanyInformation;

class CompanyInfoRepository implements CompanyInfoRepositoryInterface
{
    public function store(array $input){
       // $com=CompanyInformation::create($input);
        $com=CompanyInformation::find(1);

            if($input['name']) $com->name =$input['name'];
            if ($input['phone']) $com->phone = $input['phone'];
            if ($input['email']) $com->email = $input['email'];
            if ($input['website']) $com->website = $input['website'];
            if ($input['linkedin']) $com->linkedin = $input['linkedin'];
            if ($input['fb']) $com->fb = $input['fb'];
            if ($input['google']) $com->google = $input['google'];
             if ($input['twitter']) $com->twitter = $input['twitter'];
            if ($input['country']) $com->country = $input['country'];
            if ($input['no_client']) $com->no_client = $input['no_client'];
            if ($input['satisfy_client']) $com->satisfy_client = $input['satisfy_client'];
            if ($input['no_emplyee']) $com->no_emplyee = $input['no_emplyee'];
            if ($input['phone']) $com->phone = $input['phone'];
            if ($input['exp_year']) $com->exp_year = $input['exp_year'];
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
                $com->image =$new_au;

            }
            if ($input['about_us']) $com->about_us = $input['about_us'];

        $com->save();


    }



}



?>
