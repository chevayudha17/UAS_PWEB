<div class="container mt-5">
    
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?=$data['pb']['gambar'] ?>" allowfullscreen></iframe>
    </div>
        <div class="card" style="width: 50rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$data['pb']['nama_adat'] ?></h5>
            <p class="card-text"><?=$data['pb']['keterangan'] ?></p>
            <a href="<?= BASEURL ;?>/bali/adat" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
