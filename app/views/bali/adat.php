<div class="p-3 mb-2 bg-info text-white">
<center><h1><?= $data['nama'] ;?></h1></center></div>
<div class="bg-light text-dark">

    <center><div class="card" style="width: 50rem;">
    <img src="<?= BASEURL ;?>/img/gbrbali/mandi.jpg" class="card-img-top rounded mx-auto d-block" alt="" width="300">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"> Kebudayaan Bali terkenal akan seni tari, seni pertujukan, dan seni ukirnya. 
            Covarrubias mengamati bahwa setiap orang Bali layak disebut sebagai seniman, sebab ada berbagai aktivitas seni 
            yang dapat mereka lakukan—lepas dari kesibukannya sebagai petani, pedagang, kuli, sopir, dan sebagainya—mulai dari 
            menari, bermain musik, melukis, memahat, menyanyi, hingga bermain lakon. Dalam suatu desa yang bobrok sekalipun dapat 
            dijumpai sebuah pura yang indah, pemain gamelan andal, dan bahkan aktor berbakat.Bahkan sesajen yang dibuat 
            wanita Bali memiliki sisi artistik pada jalinan potongan daun kelapa dan susunan buah-buahan yang rapi dan menjulang.
            Menurut Covarrubias, seniman Bali adalah perajin amatir, yang melakukan aktivitas seni sebagai wujud persembahan,
             dan tidak peduli apakah namanya akan dikenang atau tidak.Seniman Bali juga merupakan peniru yang baik, sehingga 
             ada pura yang didekorasi dengan ukiran menyerupai dewa khas Tionghoa, atau dihiasi relief kendaraan bermotor, yang 
             mereka contoh dari majalah asing.</p>
        </div>
    </div></center>

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
            <p>Daftar Adat Bali</p>
                <?php foreach ($data['pb'] as $pb ): ?>
                    <li class="list-group-item">
                    <?= $pb['nama_adat'] ;?>
                    <a href="<?= BASEURL ;?>/bali/hapus/<?= $pb['id']  ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('apakah anda ingin menghapus adat ini?');">Hapus</a>
                    <a href="<?= BASEURL ;?>/bali/infoadat/<?= $pb['id']  ?>" class="badge badge-success float-right">More Info</a>                    
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                Tambah Adat
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Adat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;  ?>/bali/tambahAdat" method="post">
        <div class="form-group">
            <label for="nama_wisata">Nama Adat</label>
            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata">
        </div>
        <div class="form-group">
            <label for="gambar">Foto Adat</label>
            <input type="text" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="form-group">
            <label for="keterangan">Deskripsi Adat</label>
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
