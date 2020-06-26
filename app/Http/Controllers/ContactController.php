<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Contact; use Mail; 

class ContactController extends Controller { 

      public function getContact() { 

       return view('contact_us'); 
      } 

     public function saveContact(Request $request) { 
        $this->validate($request, [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/u|max:30',
            'email' => 'required|email|regex:/(.*)@gmail\.com/i',
            'subject' => 'required|min:1|max:50',
            'message' => 'required|min:1|max:200'
        ],[
            'name.regex' => ' The Name field contains only letters.',
            'name.max' => ' The Name may not be greater than 30 characters.',
            'email.regex' => ' The email should be in proper format and accepts only gmail address.',
            'subject.max' => ' The Subject may not be greater than 50 characters.',
            'message.max' => ' The Message may not be greater than 200 characters.'
            
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();
        
        //$message1="Mail sent successfully";
        

        \Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('pb9298@gmail.com');
               });

        
        $request->session()->flash('alert-success', 'Mail sent successfully.');
        return back()->with('success', 'Thank you for contact us!');
        
    }
}