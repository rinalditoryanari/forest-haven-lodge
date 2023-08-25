<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Exception;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function api_show()
    {
        $pesan = Pesan::all();

        return response()->json(
            [
                'data' => $pesan,
            ]
        );
    }

    public function api_create()
    {
        try {
            $this->validate(
                request(),
                [
                    'nama' => 'required',
                    'kelamin' => 'required| in: "laki", "perempuan"',
                    'no_Id' => 'required| numeric | digits:16',
                    'tipe_kamar' => 'required| in: "standar", "deluxe", "executives"',
                    'harga' => 'required',
                    'tgl_pesan' => 'required| date',
                    'durasi' => 'required|numeric',
                    'breakfast' => 'required',
                    'total' => 'required| numeric',
                ],
                [
                    'no_Id.digits' => 'Isian salah.. data harus 16 digit ',
                    'no_Id.required' => 'Isian salah.. data harus 16 digit ',
                    'durasi.numeric' => 'Durasi harus isi angka ',
                ]
            );

            if (request('breakfast')) {
                $discount = 30;
            } else {
                $discount = 0;
            };

            $data = [
                'nama' => request('nama'),
                'kelamin' => request('kelamin'),
                'no_identitas' => request('no_Id'),
                'tipe_kamar' => request('tipe_kamar'),
                'harga' => request('harga'),
                'tgl_pesan' => request('tgl_pesan'),
                'durasi' => request('durasi'),
                'breakfast' => request('breakfast'),
                'discount' => $discount,
                'total' => request('total'),
            ];

            $user = Pesan::insert($data);

            return response()->json(
                [
                    'status' => 'Data Pemesananan atas nama ' . request('nama') . ' Berhasil Disimpan',
                    'data' => $data,
                ]
            );
        } catch (Exception $th) {
            return response()->json([
                'error' => $th->getMessage(),
            ]);
        }
    }
}
