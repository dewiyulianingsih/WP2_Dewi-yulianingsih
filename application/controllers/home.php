<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelBuku'); // Load model ModelBuku
        $this->load->model('ModelUser'); // Load model ModelUser
    }

    public function index()
    {
        $data = [
            'judul' => "Katalog Buku",
            'buku' => $this->ModelBuku->getBuku()->result(),
        ];

        // Cek apakah sudah login atau belum
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('buku/daftarbuku', $data);
            $this->load->view('templates/templates-user/footer', $data);
            $this->load->view('templates/templates-user/modal', $data);

        } else {
            $data['user'] = 'Pengunjung';
        }

        $this->load->view('templates/templates-user/header', $data);
        $this->load->view('buku/daftarbuku', $data);
        $this->load->view('templates/templates-user/footer', $data);
        $this->load->view('templates/templates-user/modal', $data);
    }
    public function detailBuku()
    {
    $id = $this->uri->segment(3);
    $buku = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();
    $data['user'] = "Pengunjung";
    $data['title'] = "Detail Buku";

    foreach ($buku as $fields) {
        $data['judul'] = $fields->judul;
        $data['pengarang'] = $fields->pengarang;
        $data['penerbit'] = $fields->penerbit;
        $data['kategori'] = $fields->kategori;
        $data['tahun'] = $fields->tahun_terbit;
        $data['isbn'] = $fields->isbn;
        $data['gambar'] = $fields->image;
        $data['dipinjam'] = $fields->dipinjam;
        $data['dibooking'] = $fields->dibooking;
        $data['stok'] = $fields->stok;
        $data['id'] = $id;
    }

    $this->load->view('templates/templates-user/header', $data);
    $this->load->view('buku/detail-buku', $data);
    $this->load->view('templates/templates-user/footer');
    $this->load->view('templates/templates-user/modal', $data);
}
}