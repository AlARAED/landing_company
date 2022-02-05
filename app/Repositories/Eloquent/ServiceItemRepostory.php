<?php
namespace App\Repositories\Eloquent;
use App\AboutUs;use App\CompanyInformation;
use App\Order;
use App\Repositories\interfaces\AboutUsRepositoryInterface;
use App\Repositories\Interfaces\ContactRepositoryInterface;
use App\Repositories\interfaces\ServiceItemRepositoryInterface;
use App\Service;use App\ServicItem;
use App\Repositories\interfaces\ServiceRepositoryInterface;


class ServiceItemRepostory implements ServiceItemRepositoryInterface
{
    public function store(array $input){

      ServicItem::create($input);

    }

    public function update(array $input,$id){

       $ServicItem=ServicItem::find($id);

        if($input['title']) $ServicItem->title =$input['title'];
        if($input['text']) $ServicItem->text =$input['text'];
        $ServicItem->save();

    }
    public function delete($id){

       $ServicItem=ServicItem::find($id);
       $ServicItem->delete();

    }


}



?>
