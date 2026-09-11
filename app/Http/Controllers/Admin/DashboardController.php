<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard admin
     */
    public function index()
    {
        // Jumlah pesan dari halaman Contact
        $contactMessages = DB::table('contact_messages')->count();

        // Jumlah Request a Quote
        $rfqRequests = DB::table('rfq_requests')->count();

        // Mengambil 5 pesan contact terbaru
        $recentMessages = DB::table('contact_messages')
            ->latest()
            ->limit(5)
            ->get();

        // Mengambil 5 RFQ terbaru
        $recentRfq = DB::table('rfq_requests')
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact(
            'contactMessages',
            'rfqRequests',
            'recentMessages',
            'recentRfq'
        ));
    }
}
