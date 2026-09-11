<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class MessageController extends Controller
{
    /**
     * Menampilkan semua pesan contact.
     */
    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view('admin.contact.contact', compact('messages'));
    }


    /**
     * Menampilkan detail pesan.
     *
     * Jika pesan masih baru, otomatis
     * ditandai sebagai sudah dibaca.
     */
    public function show(ContactMessage $message)
    {
        if ($message->status === 'new') {
            $message->update([
                'status' => 'read',
            ]);
        }

        return view('admin.contact.show', compact('message'));
    }


    /**
     * Menghapus pesan.
     */
    public function destroy(ContactMessage $message)
    {
        $message->delete();

        return redirect()
            ->route('admin.messages.index')
            ->with('success', 'Pesan berhasil dihapus.');
    }
}
