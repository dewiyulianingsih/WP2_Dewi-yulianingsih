<?php class siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-siswa');
    }
    public function cetak()
    {

        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'alamat' => $this->input->post('alamat'),
            'tmpt' => $this->input->post('tmpt'),
            'tgl' => $this->input->post('tgl'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
        ];
        $this->load->view('view-data-siswa', $data);
    }
}