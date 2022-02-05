<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Interfaces\ContactRepositoryInterface;

use App\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function store(array $inputs){
        return Contact::create($inputs);

    }



}



?>
