<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']?> Page</title>
    <link rel="stylesheet"  href="<?= BASEURL;  ?>/css/bootstrap.css" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= BASEURL;  ?>/img/A.png" width="70" height="70" class="d-inline-block align-top" alt="">
        </a>
        <a class="navbar-brand" href="<?= BASEURL;  ?>">ADABU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <ul class="nav nav-pills " id="pills-tab" role="tablist">
            <li class="nav-item dropdown"  role="presentation">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pariwisata
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= BASEURL ;?>/Bali">Bali</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/Jogja">Jogja</a>
                <a class="dropdown-item" href="#">Lombok</a>
            </div>
            </li>
            <li class="nav-item dropdown"  role="presentation">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Adat
                </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= BASEURL ;?>/Bali/adat">Bali</a>
                <a class="dropdown-item" href="<?= BASEURL ;?>/Jogja/adat">Jogja</a>
                <a class="dropdown-item" href="#">Lombok</a>
            </div>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="<?= BASEURL ;?>/About" role="tab" aria-controls="pills-contact" aria-selected="false">Trivia</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>
        </div>
    </div>
    

   
</nav>