<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class ContactController extends Controller
{
    public function show() {
        return view('Contact.contact');
    }
    
    public function mailToAdmin(ContactFormRequest $message, Admin $admin) {
        
        // send Admin the notify
        $admin -> notify(new InboxMessage($message));
        
        // redirect the user feedback
        return redirect()->back()->with('message', 'thank you');
        
    }
        
}
