<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/header');
    }

    public function detail($id)
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/header');
    }
}
