<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

// class FileUploadController extends Controller
// {
//     // Fungsi untuk menampilkan halaman upload
//     public function getHeader()
//     {
//         $data = 'Upload User Data'; // Variabel data yang dikirim ke view
//         return view('filament.custom.upload-file', compact('data'));
//     }

//     // Fungsi untuk menyimpan data dari file CSV
//     public function save(Request $request)
//     {
//         // Validasi file harus berformat CSV atau TXT
//         $request->validate([
//             'file' => 'required|mimes:csv,txt',
//         ]);

//         $filePath = $request->file('file')->getRealPath();

//         // Membuka file CSV
//         if (($handle = fopen($filePath, 'r')) !== false) {
//             // Lewati baris pertama (header) jika ada
//             fgetcsv($handle);

//             // Baca setiap baris dalam file CSV
//             while (($row = fgetcsv($handle, 1000, ',')) !== false) {
//                 // Simpan data ke tabel `users`
//                 User::create([
//                     'name'     => $row[0], // Kolom pertama di CSV
//                     'email'    => $row[1], // Kolom kedua di CSV
//                     'password' => Hash::make($row[2]), // Kolom ketiga di CSV
//                 ]);
//             }

//             fclose($handle);
//         }

//         return redirect()->back()->with('success', 'Data berhasil diimport!');
//     }
// }
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FileUploadController extends Controller
{
    public function getHeader()
    {
        $data = 'Upload User Data';
        return view('filament.custom.upload-file', compact('data'));
    }

    public function save(Request $request)
    {
        // Validasi file harus berformat XLSX
        $request->validate([
            'file' => 'required|mimes:xlsx',
        ]);

        $filePath = $request->file('file')->getRealPath();

        // Membuka file .xlsx menggunakan ZipArchive
        $zip = new \ZipArchive();
        if ($zip->open($filePath) === true) {
            // Membaca sharedStrings untuk menangani teks
            $sharedStrings = [];
            if (($index = $zip->locateName('xl/sharedStrings.xml')) !== false) {
                $xmlStrings = $zip->getFromIndex($index);
                $xml = new \DOMDocument();
                $xml->loadXML($xmlStrings);
                $stringItems = $xml->getElementsByTagName('si');

                foreach ($stringItems as $item) {
                    $sharedStrings[] = $item->textContent;
                }
            }

            // Membaca data dari sheet pertama
            if (($index = $zip->locateName('xl/worksheets/sheet1.xml')) !== false) {
                $xmlData = $zip->getFromIndex($index);
                $xml = new \DOMDocument();
                $xml->loadXML($xmlData);
                $rows = $xml->getElementsByTagName('row');
                $isHeader = true;

                // Loop setiap baris pada file .xlsx
                foreach ($rows as $row) {
                    if ($isHeader) {
                        $isHeader = false;
                        continue; // Lewati header
                    }

                    // Mengambil data setiap kolom
                    $cells = $row->getElementsByTagName('c');
                    $data = [];

                    foreach ($cells as $cell) {
                        $cellType = $cell->getAttribute('t');
                        $cellValue = $cell->getElementsByTagName('v')->item(0)->nodeValue;

                        // Jika cell tipe "s", ambil dari sharedStrings
                        if ($cellType === 's') {
                            $data[] = $sharedStrings[$cellValue];
                        } else {
                            $data[] = $cellValue;
                        }
                    }

                    // Pastikan hanya menyimpan baris yang memiliki 3 kolom (name, email, password)
                    if (count($data) >= 3) {
                        User::create([
                            'name'     => $data[0],
                            'email'    => $data[1],
                            'password' => Hash::make($data[2]),
                        ]);
                    }
                }
            }
            $zip->close();
        }

        return redirect()->back()->with('success', 'Data berhasil diimport dari file XLSX!');
    }
}
