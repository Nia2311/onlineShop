<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url();?>assets/slider.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url();?>assets/slider1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url();?>assets/slider2.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
      <img src="<?= base_url();?>assets/scene1.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
      <img src="<?= base_url();?>assets/scene2.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid my-5">
    <div class="row text-center">
        <?php foreach($idol as $brg) : ?>
            <div class="card m-3 p-2 rounded border-top-0" style="width: 300px";>
                <img src="<?= base_url().'assets/'.$brg->gambar;?>" class="card-img-top rounded-lg" alt="...">
                <div class="card-body">
                <h4 class="card-title mb-1"><?= $brg->nama_brg ?></h4>
                    <small><?= $brg->keterangan ?></small>
                    <br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?=number_format($brg->harga, 0,',','.') ?></span>
                    <br>
                    <?= anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary"> Add to Cart </div>')?>
										<?= anchor('dashboard/detail_barang/'.$brg->id_brg,'<div class="btn btn-sm btn-success"> Detail </div>')?>                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
