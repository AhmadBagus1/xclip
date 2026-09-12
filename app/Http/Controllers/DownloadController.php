<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{

    public function index()
    {
        $downloads = Download::where('is_active', true)
            ->oldest()
            ->get();

        return view(
            'public.downloads.downloads',
            compact('downloads')
        );
    }

    /**
     * Download file menggunakan nama file asli.
     */
    public function download(Download $download)
    {
        /*
        |--------------------------------------------------------------------------
        | Pastikan file aktif
        |--------------------------------------------------------------------------
        */

        if (!$download->is_active) {
            abort(404);
        }

        /*
        |--------------------------------------------------------------------------
        | Gunakan public storage
        |--------------------------------------------------------------------------
        */

        /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
        $disk = Storage::disk('public');


        if (
            !$download->file ||
            !$disk->exists($download->file)
        ) {
            abort(404);
        }



        return $disk->download(
            $download->file,
            $download->file_name ?? basename($download->file)
        );
    }
}
