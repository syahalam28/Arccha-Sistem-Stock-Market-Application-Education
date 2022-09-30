<?php

namespace App\Controllers;

class Analisis extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Regular Analysis';
        return view('analisis/index', $data);
    }
    public function utama()
    {
        $data['judul'] = 'Advanced Analysis';
        return view('analisis/utama', $data);
    }
    public function hitung()
    {
        $data['judul'] = 'Calculator Analysis';
        return view('analisis/hitung', $data);
    }
    public function hitung2()
    {
        $data['judul'] = 'Calculator Analysis';
        return view('analisis/hitung2', $data);
    }
    public function konsul()
    {
        $data['judul'] = 'Consultation';
        return view('analisis/konsul', $data);
    }

    public function sinyal()
    {
        $data['judul'] = 'Arccha Alert';
        return view('analisis/sinyal', $data);
    }
}
