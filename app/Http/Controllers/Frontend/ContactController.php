<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\Contact as MailContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use Mail;

class ContactController extends Controller
{
    //

    public function store(Request $request){

Contact::create([
'name'=> $request->name,
'email' => $request->email,
'subject' => $request->subject,
'message' => $request->message,
'phone' => $request->phone,
]);

$mailData = [
    'name' => $request->name,
    'email' => $request->email,
    'subject' => $request->subject,
    'message' => $request->message,
    'phone' => $request->phone,
];

Mail::to('aaviscar09@gmail.com')->send(new MailContact($mailData));


return redirect()->back()->with('popsuccess', 'Feedback Submitted Sucessfully');
    }







public function export()
{
    $contacts = \App\Models\Contact::all();

    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="contacts.csv"',
    ];

    $columns = ['Name', 'Email', 'Phone', 'Subject', 'Message', 'Date'];

    $callback = function () use ($contacts, $columns) {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);

        foreach ($contacts as $contact) {
            fputcsv($file, [
                $contact->name,
                $contact->email,
                $contact->phone,
                $contact->subject,
                $contact->message,
                $contact->created_at->format('Y-m-d H:i:s'),
            ]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}

}
