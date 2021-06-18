<?php 

class Bali extends Controller{
    public function index($nama = 'Pariwisata Bali')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'bali';
        $data['pb'] = $this->model('Balipari_model')->getAllPariwisata();
        $this->view('templates/header', $data);
        $this->view('bali/index', $data);
        $this->view('templates/footer');

    } 

    public function info($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Balipari_model')->getPariwisataById($id);
        $this->view('templates/header', $data);
        $this->view('bali/info', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if( $this->model('Balipari_model')->tambahDataPari($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/bali');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/bali');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Balipari_model')->hapusDataPari($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/bali');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/bali');
            exit;
        }
    }
    
#adat
    public function adat($nama = 'Adat Bali')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'Adat Bali';
        $data['pb'] = $this->model('Baliadat_model')->getAllAdat();
        $this->view('templates/header', $data);
        $this->view('bali/adat', $data);
        $this->view('templates/footer');
    }

    public function infoAdat($id)
    {
        $data['judul'] = 'more info';
        $data['pb'] = $this->model('Baliadat_model')->getAdatById($id);
        $this->view('templates/header', $data);
        $this->view('bali/infoadat', $data);
        $this->view('templates/footer');
    }
    public function tambahAdat()
    {
        if( $this->model('Baliadat_model')->tambahDataAdat($_POST)>0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/bali/adat');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/bali/adat');
            exit;
        }
    }
    public function hapusAdat($id)
    {
        if( $this->model('Baliadat_model')->hapusDataAdat($id)>0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/bali/adat');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/bali/adat');
            exit;
        }
    }
}