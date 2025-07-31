<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientDetail;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::latest()->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{

    dd($request->all());
    // Validate main client data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email',
        'phone' => 'nullable|string|max:50',
        'project_name' => 'nullable|string|max:255',
        'start_date' => 'nullable|date',
        'due_date' => 'nullable|date',
        'status' => 'nullable|string',
        'deal_done' => 'nullable|boolean',
        // 'percentage' => 'required|numeric|min:0|max:100',
        'priority' => 'nullable|string',
        'remarks' => 'nullable|string',

        // Optional client detail fields
        'referred_by_name' => 'nullable|string|max:255',
        'referred_by_phone' => 'nullable|string|max:50',
        'bank_account' => 'nullable|string|max:255',
        'amc' => 'nullable|string|max:255',
        'quotation_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
    ]);

    // Create the main client
    $client = Client::create($validated);

    // Create client_details if deal is done
    if ($request->deal_done) {
        $clientDetail = new ClientDetail();
        $clientDetail->client_id = $client->id;
        $clientDetail->referred_by_name = $request->referred_by_name;
        $clientDetail->referred_by_phone = $request->referred_by_phone;
        $clientDetail->bank_account = $request->bank_account;
        $clientDetail->amc = $request->amc;

        // Handle quotation file upload
        if ($request->hasFile('quotation_file')) {
            $file = $request->file('quotation_file');
            $filePath = $file->store('quotations', 'public');
            $clientDetail->quotation_file = $filePath;
        }

        $clientDetail->save();
    }

    return redirect()->route('admin.clients.index')->with('popsuccess', 'Client added successfully.');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'deal_done' => 'required|boolean',
            'percentage' => 'required|numeric|min:0|max:100',
        ]);
        $client->update($request->all());
        return redirect()->route('admin.clients.index')->with('popsuccess', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index')->with('popsuccess', 'Client deleted successfully.');
    }
}
