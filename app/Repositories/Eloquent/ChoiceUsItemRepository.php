<?php
namespace App\Repositories\Eloquent;
use App\CompanyInformation;
use App\Repositories\interfaces\AboutUsRepositoryInterface;
use App\Repositories\interfaces\ChoiceUsRepositoryInterface;
use App\Repositories\interfaces\ChoicUsItemRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;

use App\AboutUs;
use App\ChoiceUsItem;
use App\ServicItem;

class ChoiceUsItemRepository implements ChoicUsItemRepositoryInterface
{
    public function store(array $input)
    {

        ChoiceUsItem::create($input);
    }
    public function update(array $input,$id){

        $ChoiceUsItem=ChoiceUsItem::find($id);

        if($input['title']) $ChoiceUsItem->title =$input['title'];
        if($input['text']) $ChoiceUsItem->text =$input['text'];
        $ChoiceUsItem->save();

    }

    public function delete($id)
    {

        $ChoiceUsItem=ChoiceUsItem::find($id);
        $ChoiceUsItem->delete();
    }
}


?>
