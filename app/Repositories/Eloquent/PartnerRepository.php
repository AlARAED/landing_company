<?php
namespace App\Repositories\Eloquent;

use App\ChoiceUsItem;
use App\Repositories\interfaces\PartnerRepositoryInterface;
use App\Repositories\interfaces\WorkUsRepositoryInterface;
use App\Partner;

class PartnerRepository implements PartnerRepositoryInterface
{

    public function update(array $input){

        $Partner=Partner::find(1);
        if($input['title']) $Partner->title =$input['title'];
        if($input['text']) $Partner->text =$input['text'];
        $Partner->save();

    }

}


?>
