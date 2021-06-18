<?php 

class Jogja extends Controller{
    public function index($nama = 'Pariwisata jogja')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'Pariwisata Jogja';
        $data['pb'] = $this->model('Jogjapari_model')->getAllPariwisata();
        $this->view('templates/header', $data);
        $this->view('jogja/index', $data);
        $this->view('templates/footer');

    } 

    public function adat($nama = 'Adat jogja')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'Adat jogja';
        $this->view('templates/header', $data);
        $this->view('jogja/adat', $data);
        $this->view('templates/footer');
    }
    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Jogjapari_model')->getPariwisataById($id);
        $this->view('templates/header', $data);
        $this->view('jogja/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Jogjapari_model')->tambahDataPari($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/jogja');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/jogja');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Jogjapari_model')->hapusDataPari($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/jogja');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/jogja');
            exit;
        }
    }
}