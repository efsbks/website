<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_login_model');
        if (!$this->Pegawai_login_model->current_user() or $this->Pegawai_login_model->current_user()->PIMPINAN != 1) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        redirect('pimpinan/grafik/masuk');
    }

    public function masuk()
    {
        $this->data['user'] = $this->Pegawai_login_model->current_user();
        $this->data['judul'] = 'Grafik Surat masuk';
        $this->data['menu'] = 'pimpinan/v_menu';
        $this->data['contents'] = 'grafik/v_graph_srt_masuk';
        $this->load->view('pimpinan/v_home', $this->data);
    }

    public function disposisi()
    {
        $this->data['user'] = $this->Pegawai_login_model->current_user();
        $this->data['judul'] = 'Grafik Disposisi Surat Masuk';
        $this->data['menu'] = 'pimpinan/v_menu';
        $this->data['contents'] = 'grafik/v_graph_srt_disposisi';
        $this->load->view('pimpinan/v_home', $this->data);
    }

    public function keluar()
    {
        $this->data['user'] = $this->Pegawai_login_model->current_user();
        $this->data['judul'] = 'Grafik Surat Keluar';
        $this->data['menu'] = 'pimpinan/v_menu';
        $this->data['contents'] = 'grafik/v_graph_srt_keluar';
        $this->load->view('pimpinan/v_home', $this->data);
    }
}
