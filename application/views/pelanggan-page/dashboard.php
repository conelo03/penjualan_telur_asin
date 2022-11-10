<?php $this->load->view('pelanggan-page/template/header');?>
<?php 
if ($this->session->userdata('login') != TRUE) {
  $this->load->view('pelanggan-page/template/sidebar_nolog');
} else {
  $this->load->view('pelanggan-page/template/sidebar');
}
?>
<!-- Main Content -->
<div class="main-content" style="padding-top: 100px;">
  <section class="section">
    <div class="row justify-content-center p-2 bg-banner">
        <div class="col-md-8" style="padding: 180px 0;">
          <!-- <div class="row" style="background-color: white; z-index: 1; height: 300px">
            <div class="col-md-4 bg-header">

            </div>
            <div class="col-md-8 p-2">
              <h1 class="text-dark">Telur Asin Ibu Ida</h1>
            </div>
          </div> -->
        </div>
    </div>

    <div class="section-body mt-4">
      <div class="row">
        <?php foreach ($produk as $p) { ?>
          <div class="col-12 col-sm-6 col-md-2 col-lg-2 d-flex align-items-stretch">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image">
                  <div id="carouselExampleControls<?= $p['id_produk'] ?>" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <?php 
                      $images = explode('||', $p['foto_produk']);
                      $no = 1;
                      foreach ($images as $key) { ?>
                        <?php if($no == 1):?>
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('assets/upload/foto_produk/'.$key) ?>" alt="First slide">
                          </div>
                        <?php else:?>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('assets/upload/foto_produk/'.$key) ?>" alt="Second slide">
                          </div>
                        <?php endif;?>

                    <?php $no++; } ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls<?= $p['id_produk'] ?>" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls<?= $p['id_produk'] ?>" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h6><a href="#"><?= $p['nama_produk'] ?></a></h6>
                </div>
                <p>Rp <?= number_format($p['harga_produk'], 2, '.', ',') ?></p>
                <div class="article-cta">
                  <a href="<?= base_url('detail-produk/'.$p['id_produk']) ?>" class="btn btn-info">Check Out</i></a>
                </div>
              </div>
            </article>
          </div>
        <?php } ?>
        
      </div>
    </div>

    <div class="section-body mt-4 mb-4">
      <h4 class="text-center mb-4">Partner Logistik</h4>
      <div class="row">
        <div class="col-2 col-md-4">
          &nbsp;
        </div>
        <div class="col-2 col-md-1">
          <img src="<?= base_url('assets/img/partner-pembayaran/bca.webp') ?>" width="100%"/>
        </div>
        <div class="col-2 col-md-1">
          <img src="<?= base_url('assets/img/partner-pembayaran/bri.png') ?>" width="100%"/>
        </div>
        <div class="col-2 col-md-1">
          <img src="<?= base_url('assets/img/partner-pembayaran/bni.png') ?>" width="100%"/>
        </div>
        <div class="col-2 col-md-1">
          <img src="<?= base_url('assets/img/partner-pembayaran/mandiri.png') ?>" width="100%"/>
        </div>
        <div class="col-2 col-md-4">
          &nbsp;
        </div>
      </div>
    </div>

    <div class="section-body mt-4 mb-4">
      <h4 class="text-center mb-4">Partner Pembayaran</h4>
      <div class="row">
        <div class="col-0 col-md-4">
          &nbsp;
        </div>
        <div class="col-6 col-md-3 ml-auto mr-auto">
          <div class="row">
            <div class="col-4 col-md-4">
              <img src="<?= base_url('assets/img/partner-pembayaran/jnt.png') ?>" width="100%"/>
            </div>
            <div class="col-4 col-md-4">
              <img src="<?= base_url('assets/img/partner-pembayaran/jne.png') ?>" width="100%"/>
            </div>
            <div class="col-4 col-md-4">
              <img src="<?= base_url('assets/img/partner-pembayaran/tiki.png') ?>" width="100%"/>
            </div>
          </div>
        </div>
        
        <div class="col-0 col-md-4">
          &nbsp;
        </div>
      </div>
    </div>

    <div class="section-body mt-4 mb-4">
      <h4 class="text-center mb-4">Contact Us</h4>
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          +62895-3548-36605 (<a href="https://wa.me/62895354836605?text=Hallo%20Admin" target="_blank">WhatsApp</a>)
        </div>
        <div class="col-12 text-center">
          JL SONGGOM LOR PASAR LAMA RT 03/RW03 SONGGOM-BREBES
        </div>
      </div>
    </div>

    <div class="section-body mt-4 mb-4">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <a href="#" target="_blank"><img src="<?= base_url('assets/img/FB.svg') ?>" width="60px"/></a>
          <a href="#" target="_blank"><img src="<?= base_url('assets/img/IG.svg') ?>" width="60px"/></a>
        </div>
      </div>
    </div>
  </section>
  
</div>

<?php $this->load->view('pelanggan-page/template/footer');?>