<?= $this->extend('templating/page-layout') ?>

<?= $this->section('content') ?>

  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('/assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="p-logo" src="/assets/img/1627953853779.png" alt="">
          <h1 class="h1-seo">Selamat Datang di</h1>
          <h3>CodeMassive Education - Komunitas IT Konsentrasi Software Engineering</h3>
          <div class="row">
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              <a href="<?php echo base_url('/landing-page')?>">
                <button class="btn btn-outline-primary">Pelajari Selengkapnya</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->endSection() ?>