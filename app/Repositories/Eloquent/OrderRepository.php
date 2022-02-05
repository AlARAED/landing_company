<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Interfaces\OrderRepositoryInterface;

use App\Order;
use http\Env\Response;

class OrderRepository implements OrderRepositoryInterface
{
	    public function store(array $inputs){
	      Order::create($inputs);



 }



}



?>
