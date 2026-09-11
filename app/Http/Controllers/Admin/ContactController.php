<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Menampilkan semua contact messages
     */
    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view('admin.contact.contact', compact('messages'));
    }


    /**
     * Menampilkan detail contact message
     */
    public function show(ContactMessage $message)
    {
        // Jika pesan masih baru, otomatis ubah menjadi read
        if ($message->status === 'new') {
            $message->update([
                'status' => 'read',
            ]);
        }

        return view('admin.contact.show', compact('message'));
    }


    /**
     * Menandai pesan sebagai replied
     */
    public function reply(ContactMessage $message)
    {
        $message->update([
            'status' => 'replied',
        ]);

        return redirect()
            ->route('admin.contact.show', $message)
            ->with('success', 'Message marked as replied.');
    }
}
