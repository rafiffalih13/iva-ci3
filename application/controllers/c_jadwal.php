<?php
class C_jadwal extends CI_Controller
{
    public function index($page = 'jadwal')
    {
        date_default_timezone_set('Asia/Makassar');
        $data['title'] = ucfirst($page);

        $data['jadwal'] = $this->M_jadwal->get_jadwal();

        // $data['first'] = $this->m_jadwal->get_first();

        // $data['last'] = $this->m_jadwal->get_last();

        // $row = $data['first'];

        // if (isset($row)) {
        //     echo $row['nama pasien'];
        // }

        // foreach ($data['first'] as $key) {
        //     echo $key->(n, j, y);
        // }
        // echo $data['jadwal'];
        // echo $data['first']['waktu'];
        // echo $data['last']['waktu'];
        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
        // echo date('l');
    }

    public function create_jadwal()
    {
        $nama = $this->input->post('nama');
        $waktu = $this->input->post('waktu');

        $run = $this->M_jadwal->create_jadwal();

        redirect('c_jadwal');
    }
}
