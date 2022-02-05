<?php

namespace App\Http\Controllers;

use App\Http\Requests\admin\UserRequest;
use App\Repositories\Eloquent\UserRepository;

class UserController extends Controller
{
    protected $user;
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function update_info(UserRequest $request)
    {
   $this->user->update($request->all());

        return redirect()->back()->with('message', 'تم تعديل  بنجاح !');
    }


}
