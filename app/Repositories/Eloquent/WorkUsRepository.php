<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Repositories\interfaces\AboutUsRepositoryInterface;
use App\Repositories\interfaces\ChoiceUsRepositoryInterface;
use App\Repositories\interfaces\ChoicUsItemRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;

use App\AboutUs;
use App\ChoiceUsItem;
use App\Repositories\interfaces\WorkUsRepositoryInterface;
use App\ServicItem;
use App\WorkUs;

class WorkUsRepository implements WorkUsRepositoryInterface
{

    public function update(array $input){

        $WorkUs=WorkUs::find(1);
        if($input['title']) $WorkUs->title =$input['title'];
        if($input['text']) $WorkUs->text =$input['text'];
        $WorkUs->save();

    }

}


?>
