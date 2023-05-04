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

 $calling = request()->getRequestUri();
 $caller = $request->header('referer');

 $referer = $request->header('referer');
 $refererPath = parse_url($referer, PHP_URL_PATH);
 $realCaller = parse_str(parse_url($referer, PHP_URL_QUERY), $refererQueryParams);

 // Check if the session already contains the success message
 $hasSuccessMessage = $request->session()->get('success');

 if ($refererPath == '/') {
     // Redirect the user back to the homepage if the session already contains the success message
     if ($hasSuccessMessage) {
         return redirect('/');
     }
     // Otherwise, redirect the user back to the homepage with the success message
      return back()->with('success', 'Thanks for reaching out. We will get back to you shortly.')->withInput()->withFragment('ContactNotification');

 } elseif ($refererPath == '/contact') {
     // Redirect the user to the contact page with the notification anchor if the session already contains the success message
     if ($hasSuccessMessage) {
         return redirect('contact#ContactNotification');
     }
     // Otherwise, redirect the user to the contact page with the notification anchor and the success message
     return redirect('contact#ContactNotification')->with('success', 'Thanks for reaching out. We will get back to you shortly.');
 } else {
     // Handle other cases or return a default response
     return response('Invalid referer', 400);
 }

        
    }
}
