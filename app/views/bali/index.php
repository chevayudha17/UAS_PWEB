<div class="p-3 mb-2 bg-info text-white"><center><h1><?= $data['nama'] ;?></h1></center></div>
<div class="p-3 mb-2 bg-light text-dark">
    <center><div class="card" style="width: 50rem;">
    <img src="<?= BASEURL ;?>/img/gbrbali/ubud.jpg" class="card-img-top rounded mx-auto d-block" alt="" width="300">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"> Bali merupakan tujuan wisata paling populer di muka bumi ini. Sebagian besar wisatawan bulan madu dan wisatawan liburan akan banyak anda temui yanga berkunjung ke pulau ini.

Bali terkenal dengan tarian dan budayanya, musik tradisional, banyak ukiran, lukisan, kerajinan kulit dan pengerjaan logam cukup populer.

Perjalanan wisata pertama dilakukan oleh Maha Rsi Markandeya dari tanah Jawa untuk tujuan penyebaran Agama Hindu di Pulau Bali pada abad ke 8 Masehi.

Lalu terdapat juga beberapa Tokoh Spiritual lainnya datang ke Pulau Bali untuk tujuan yang sama setelahnya.

Perjalanan wisata dari eropa ke pulau bali di lakukan Cornellis de Houtman dari Belanda pada Tahun 1579 sebagai orang barat pertama yang mendarat di pulau Bali. Kedatangannya itu adalah salah satu bagian dari ekspedisi mencari rempah-rempah dan berdagang di Nusantara.

Walau tak menemukan rempah-rempah yang mereka cari di pulau ini namun saat singgah sebentar rombongan tersebut menjelaskan tentang Pulau Bali.

Mereka menggambarkan Pulau Bali hanya sebuah kehidupan dengan kebudayaannya yang menurut pandangan mereka sangat unik, tidak pernah dijumpai di tempat lain yang dikunjungi selama mereka mengelilingi dunia.</p>
        </div>
    </div></center>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
    <div class="row-5">
        <div class="col-11">
            <ul class="list-group">
            <p>Daftar Pariwisata </p>
                <?php foreach ($data['pb'] as $pb ): ?>
                    <li class="list-group-item">
                    <?= $pb['nama_wisata'] ;?>
                    <a href="<?= BASEURL ;?>/bali/hapus/<?= $pb['id']  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda ingin menghapus destinasti ini?');">Hapus</a>
                    <a href="<?= BASEURL ;?>/bali/info/<?= $pb['id']  ?>" class="badge badge-success float-right">More Info</a>                    
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
        <form action="<?= BASEURL;  ?>/bali/tambah" method="post">
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
