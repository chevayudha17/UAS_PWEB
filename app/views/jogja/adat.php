<div class="p-3 mb-2 bg-light text-dark"><center><h1><?= $data['nama'] ;?></h1></center>
<div class="container mt-5">
    <center><div class="card" style="width: 50rem;">
    <img src="<?= BASEURL ;?>/img/jogja/borobudur.jpg" class="card-img-top rounded mx-auto d-block" alt="" width="300">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"> Kota Yogyakarta atau yang sering disebut kota jogja. Merupakan kota yang sangat Istimewa. Bagai mana tidak selain disebut sebagai kota pelajar Jogja juga dikenal sebagai kota pariwisata, karena Jogja memiliki beraneka ragam objek wisata yang dapat dikunjungi.

Saat ini Jogja telah menjadi tujuan wisata favorit di Indonesia, baik wisatawan local maupun asing, karena selin memiliki banyak objek wisata, Jogja juga termasuk kota yang sangat stratigis dan mudah dijangkau.

Banyak sekali aktifitas yang dapat dilakukan saat berkunjung ke Jogja baik untuk berlibur maupun untuk kepenting bisnis. Jogja memiliki keunikan tersendiri untuk tujuan wisata, seperti wisata budaya atau sejarah, wisata arsitektur, wisata candi, dan mosium monument.

Yogyakarta juga memiliki banyak tujuan wisata alam yang dapat menyegarkan pikiran dari kepenatan aktifitas sehari-hari, dengan merasakan nikmatnya kesejukan alam dari pegunungan hingga pesisir pantai.

Di Jogja juga dapat menjumpai berbagai pusat perbelanjaan dari pernak-pernik tradisional hingga barang-barang mewah dan produk-produk hasil kreativitas anak muda. Selain itu terdapat tempat-tempat  kerajinan tradisional berbahan dasar perak, kayu, kain, ataupun kulit. kita dapat melihat proses pembuatannya secara langsung. Sedangkan pusat-pusat perbelanjaan modern menawarkan barang-barang branded dengan harga yang sangat terjangkau.

Untuk mendukung kenyamana selama di Jogja, Jogja juga menyediakan fasilitas akomodasi yang dapat disesuaikan dengan kebutuhan . Pilihan hotel mewah dengan fasilitas nomor satu hingga hotel yang sederhana juga tersedia. Tempat-tempat untuk makan menyediakan berbagai pilihan rasa yang dapat memenuhi selera. Dan fasilitas transportasi menuju Jogja dari berbagai kota di Indonesia juga memberikan kemudahan untuk nikmati liburan, keindahan dan keunikan kota Jogja.

Betapa luar biasanya keindahan dan ciptaan-Nya apabila kita dapat selalu bersyukur dan selalu menjaga keindahan tersebut.</p>
        </div>
    </div></center>
</div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-group">
                <?php foreach ($data['pb'] as $pb ): ?>
                    <li class="list-group-item">
                    <?= $pb['nama_wisata'] ;?>
                    <a href="<?= BASEURL ;?>/jogja/hapus/<?= $pb['id']  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda ingin menghapus destinasti ini?');">hapus</a>
                    <a href="<?= BASEURL ;?>/jogja/info/<?= $pb['id']  ?>" class="badge badge-success float-right">More Info</a>                    
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Destinasti
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Destinasti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;  ?>/jogja/tambah" method="post">
        <div class="form-group">
            <label for="nama_wisata">Nama Destinasti</label>
            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata">
        </div>
        <div class="form-group">
            <label for="gambar">Foto Destinasti</label>
            <input type="text" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="form-group">
            <label for="keterangan">Deskripsi Destinasti</label>
            <!-- <input type="text" class="form-control" id="keterangan" name="keterangan"> -->
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submiit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
