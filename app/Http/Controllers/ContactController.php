<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        dd(5);
    }
    public function store(Request $request){
        $requestData = $request->all();
        Contact::create([
            'name' => auth()->user()->name ?? $requestData['name'],
            'email' => auth()->user()->email ?? $requestData['email'],
            'phone' => $requestData['phone'],
            'msg' => $requestData['msg'],
        ]);
        return redirect(asset('front/questions'));


    }
}
