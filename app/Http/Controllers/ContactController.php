<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use App\Jobs\SendContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function contact(Request $request){
        $formValues = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    

        dispatch(new SendContactEmail(['sendTo'=>'info@divinedaao.ng', 'name' =>$formValues['name'], 'email'=>$formValues['email'], 'subject' =>$formValues['subject'], 'message'=>$formValues['message'] ]));


        if( request()->is('/')){
            return redirect('/'.'#ContactNotification')->with('success', "Thanks for reaching out. We will get back to you shortly.");
        } else {
            return redirect('contact#ContactNotification')->with('success', "Thanks for reaching out. We will get back to you shortly.");
        }
        
    }
}
