<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\EmailMarketing;
use App\Models\Email;
use Illuminate\Http\Request;
use Mail;
use Validator;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::latest()->get();
        return view('admin.emailmarketing.index', compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.emailmarketing.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048',
        ]);

        $file = fopen($request->file('csv_file'), 'r');

        $header = fgetcsv($file); // Reads the first row as header
        $header = array_map('trim', $header); // Clean whitespace

        while ($row = fgetcsv($file)) {
            $data = array_combine($header, $row);

            if (!$data || !isset($data['name'], $data['gmail'])) {
                continue; // Skip rows with missing data
            }

            // Optional: Basic validation
            $validator = Validator::make($data, [
                'name' => 'required|string|max:255',
                'gmail' => 'required|email|unique:users,email',
            ]);

            if ($validator->fails()) {
                continue; // Skip invalid rows
            }

            // Insert data into the database
            Email::create([
                'name' => $data['name'],
                'email' => $data['gmail'], // Map "gmail" to "email"
            ]);
        }

        fclose($file);

        return redirect()->route("admin.emailmarketing.index")->with('success', 'CSV Imported Successfully!');
    }

    public function newslettercreate(Request $request)
    {

        $emails = $request->email;
        return view('admin.emailmarketing.newsletter', compact('emails'));

    }

    public function email(Request $request)
    {
        $mysubject = $request->input('subject');
        $emails = $request->input('email');
        $content = $request->input('content');

        foreach ($emails as $email) {
            Mail::to($email)->send(new EmailMarketing($content, $mysubject));
        }

        return redirect()->route("admin.emailmarketing.index")->with("popsuccess", "Email Send Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
