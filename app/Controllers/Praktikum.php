<?php

namespace App\Controllers;

class Praktikum extends BaseController
{
    public function pretest()
    {
        return view('profil_mahasiswa');
    }

    public function tambahMahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $builder->insert([
            'nim' => '32602300058',
            'nama' => 'Muhammad Aufa Wicaksono',
            'prodi' => 'Teknik Informatika'
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function mahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $query = $builder->get();
        return view('mahasiswa_view', ['data' => $query->getResult()]);
    }

}
