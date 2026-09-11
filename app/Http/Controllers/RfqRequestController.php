<?php

namespace App\Http\Controllers;

use App\Models\RfqRequest;
use Illuminate\Http\Request;

class RfqRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'company_type' => 'required|string|max:255',

            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',

            'project_name' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'project_location' => 'required|string|max:255',
            'project_status' => 'required|string|max:255',

            'budget' => 'nullable|string|max:255',
            'timeline' => 'nullable|string|max:255',

            'description' => 'required|string',

            'document' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png|max:10240',

            'agreement' => 'accepted',
        ]);

        $documentPath = null;

        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')
                ->store('rfq-documents', 'public');
        }

        RfqRequest::create([
            'company' => $validated['company'],
            'company_type' => $validated['company_type'],

            'name' => $validated['name'],
            'position' => $validated['position'] ?? null,
            'email' => $validated['email'],
            'phone' => $validated['phone'],

            'project_name' => $validated['project_name'],
            'service' => $validated['service'],
            'project_location' => $validated['project_location'],
            'project_status' => $validated['project_status'],

            'budget' => $validated['budget'] ?? null,
            'timeline' => $validated['timeline'] ?? null,

            'description' => $validated['description'],

            'document' => $documentPath,

            'agreement' => true,

            'status' => 'new',
        ]);

        return redirect()
            ->route('rfq')
            ->with('success', 'Your request has been submitted successfully.');
    }
}
