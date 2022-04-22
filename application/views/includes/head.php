<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/tmp/')?>/img/favicon.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style type='text/css'>.element,html{scrollbar-width:none}html::-webkit-scrollbar,.element::-webkit-scrollbar{display:none}</style> 
    <link rel="stylesheet" href="<?=base_url('assets/tmp/')?>/css/style.css">
    <title>Rumah Sakit Sejahtera</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?=base_url('assets/tmp/')?>/img/favicon.jpg" alt="" style="width:100px; height:80px;">RUMAH SAKIT SEJAHTERA</a>
    <form class="col-2">
    <a class="btn btn-primary fs-5 fw-bold " href="" role="button">Pendaftaran Pasien Online</a>
    </form>
  </div>
</nav> 
<nav class="navbar1 navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Beranda</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 25px;">
                    Daftar Poli
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Poli Umum</a></li>
                    <li><a class="dropdown-item" href="#">Poli Anak</a></li>
                    <li><a class="dropdown-item" href="#">Poli THT</a></li>
                    <li><a class="dropdown-item" href="#">Poli Mata</a></li>
                    <li><a class="dropdown-item" href="#">Poli Gigi</a></li>
                    <li><a class="dropdown-item" href="#">Poli Kebidanan</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('home/about') ?>">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('home/contact') ?>">Kontak Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
