<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RfqRequest;
use Illuminate\Http\Request;

class RfqController extends Controller
{
    /**
     * Menampilkan daftar RFQ.
     */
    public function index()
    {
        $rfqs = RfqRequest::latest()->get();

        return view('admin.rfq.index', compact('rfqs'));
    }


    /**
     * Menampilkan detail RFQ.
     *
     * Ketika admin membuka RFQ,
     * status otomatis berubah dari NEW menjadi READ.
     */
    public function show(RfqRequest $rfq)
    {
        if (!$rfq->is_read) {
            $rfq->update([
                'is_read' => true,
            ]);
        }

        return view('admin.rfq.show', compact('rfq'));
    }


    /**
     * Menghapus RFQ.
     */
    public function destroy(RfqRequest $rfq)
    {
        $rfq->delete();

        return redirect()
            ->route('admin.rfq.index')
            ->with('success', 'Permintaan penawaran berhasil dihapus.');
    }
}
