<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RfqRequest;

class RfqController extends Controller
{
    /**
     * Menampilkan daftar RFQ.
     */
    public function index()
    {
        $rfqs = RfqRequest::latest()->get();

        return view(
            'admin.rfq.index',
            compact('rfqs')
        );
    }


    /**
     * Menampilkan detail RFQ.
     */
    public function show(RfqRequest $rfq)
    {
        /*
        |--------------------------------------------------------------------------
        | Tandai RFQ sebagai READ ketika dibuka
        |--------------------------------------------------------------------------
        */

        if (!$rfq->is_read) {

            $rfq->update([
                'is_read' => true,
            ]);
        }


        return view(
            'admin.rfq.show',
            compact('rfq')
        );
    }


    /**
     * Menghapus RFQ.
     */
    public function destroy(RfqRequest $rfq)
    {
        $rfq->delete();


        return redirect()
            ->route('admin.rfq.index')
            ->with(
                'delete_success',
                'Permintaan penawaran berhasil dihapus.'
            );
    }
}
