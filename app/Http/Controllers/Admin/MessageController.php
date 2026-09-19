<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class MessageController extends Controller
{
    /**
     * Menampilkan daftar pesan.
     */
    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view('admin.contact.contact', compact('messages'));
    }


    /**
     * Menampilkan detail pesan.
     */
    public function show(ContactMessage $message)
    {
        /*
        |--------------------------------------------------------------------------
        | Tandai sebagai READ ketika pesan dibuka
        |--------------------------------------------------------------------------
        */

        if ($message->status === 'new') {

            $message->update([
                'status' => 'read',
            ]);
        }


        return view(
            'admin.contact.show',
            compact('message')
        );
    }


    /**
     * Menghapus pesan.
     */
    public function destroy(ContactMessage $message)
    {
        $message->delete();


        return redirect()
            ->route('admin.messages.index')
            ->with(
                'delete_success',
                'Pesan berhasil dihapus.'
            );
    }
}
