<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Uploader;
use App\User;
use App\Repositories\interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{
    public function update(array $input){
        if (isset($input['image'])) {
            $ext = pathinfo($input['image']->getClientOriginalName(),
                PATHINFO_EXTENSION);
            if ($ext=="png" || $ext=="jpg" || $ext=="gif") {
                $new_au= uniqid() . "." . $ext;
                $path = $input['image']->move('uploads', /* use storage for saving files and imags .. this is a big mistake >> dont use move */
                    $new_au);
            }
        }
             $user=\auth()->user();

        if(isset($new_au))
            if ($new_au != ''  or $new_au != null) {
                $user->image =$new_au;

            }

        if($input['name']){
            $user->name =$input['name'];

        }
        if($input['password']){
            $user->password =\Hash::make($input['password']);

        }

        $user->save();







    }



}



?>
