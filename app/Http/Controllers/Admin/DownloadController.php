<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    /**
     * Menampilkan semua download
     * dari yang paling lama sampai yang terbaru.
     */
    public function index()
    {
        $downloads = Download::oldest()->get();

        return view(
            'admin.downloads.index',
            compact('downloads')
        );
    }

    /**
     * Menampilkan halaman tambah download.
     */
    public function create()
    {
        return view('admin.downloads.create');
    }

    /**
     * Menyimpan download baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'category' => [
                'required',
                'in:company,brochure,portfolio,services,document,other'
            ],

            'file' => [
                'required',
                'file',
                'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip',
                'max:20480'
            ],

            'is_active' => [
                'nullable',
                'boolean'
            ],
        ]);

        $file = $request->file('file');

        // Simpan file dengan nama fisik random.
        $validated['file'] = $file->store(
            'downloads',
            'public'
        );

        // Simpan nama file asli.
        $validated['file_name'] =
            $file->getClientOriginalName();

        // Simpan ukuran file.
        $validated['file_size'] =
            $file->getSize();

        // Simpan status aktif.
        $validated['is_active'] =
            $request->boolean('is_active');

        Download::create($validated);

        return redirect()
            ->route('admin.downloads.index')
            ->with(
                'success',
                'File berhasil ditambahkan.'
            );
    }

    /**
     * Menampilkan detail download.
     */
    public function show(Download $download)
    {
        return view(
            'admin.downloads.show',
            compact('download')
        );
    }

    /**
     * Menampilkan halaman edit.
     */
    public function edit(Download $download)
    {
        return view(
            'admin.downloads.edit',
            compact('download')
        );
    }

    /**
     * Memperbarui download.
     */
    public function update(
        Request $request,
        Download $download
    ) {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255'
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'category' => [
                'required',
                'in:company,brochure,portfolio,services,document,other'
            ],

            'file' => [
                'nullable',
                'file',
                'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip',
                'max:20480'
            ],

            'is_active' => [
                'nullable',
                'boolean'
            ],
        ]);

        $validated['is_active'] =
            $request->boolean('is_active');

        /*
        |--------------------------------------------------------------------------
        | Jika mengganti file
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('file')) {

            // Hapus file lama.
            if (
                $download->file &&
                Storage::disk('public')->exists(
                    $download->file
                )
            ) {
                Storage::disk('public')->delete(
                    $download->file
                );
            }

            $file = $request->file('file');

            // Simpan file baru.
            $validated['file'] =
                $file->store(
                    'downloads',
                    'public'
                );

            // Simpan nama asli.
            $validated['file_name'] =
                $file->getClientOriginalName();

            // Simpan ukuran.
            $validated['file_size'] =
                $file->getSize();
        }

        $download->update($validated);

        return redirect()
            ->route('admin.downloads.index')
            ->with(
                'success',
                'File berhasil diperbarui.'
            );
    }

    /**
     * Menghapus download.
     */
    public function destroy(Download $download)
    {
        if (
            $download->file &&
            Storage::disk('public')->exists($download->file)
        ) {
            Storage::disk('public')->delete($download->file);
        }

        $download->delete();

        return redirect()
            ->route('admin.downloads.index')
            ->with(
                'delete_success',
                'File berhasil dihapus.'
            );
    }
}
