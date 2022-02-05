<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Contact;
use App\Repositories\Eloquent\ContactRepository;
use App\Repositories\Interfaces\ContactRepositoryInterface;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    protected $contact;
    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;
    }

    public function Contactpage()
    {

        $Contact=Contact::all();

        return view('cpanel.contact',compact('Contact'));
    }

    public function create(ContactRequest $request)
    {
//        admin()
         $this->contact->store($request->all());
        $response='شكراَ لك !تم ارسال طلبك بنجاح سنعاود الاتصال بك قريب';
        return response()->json($response);



    }
}
