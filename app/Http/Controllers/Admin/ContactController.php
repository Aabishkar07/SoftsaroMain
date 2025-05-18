<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = Contact::latest()->paginate(20);
        return view("admin.contact.index", compact("contacts"));
    }
    public function contactdelete($contact)
    {
        Contact::where("id", $contact)->delete();
        return redirect()->back()->with("popsuccess", "Contact Deleted");
    }
}
