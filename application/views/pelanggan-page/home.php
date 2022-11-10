<?php $this->load->view('pelanggan-page/template/header');?>
<?php $this->load->view('pelanggan-page/template/sidebar_nolog');?>
<!-- Main Content -->
<div class="main-content" style="padding-top: 100px;">
  <section class="section">
    <div class="section-header">
      <h1>Produk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Home</a></div>
        <div class="breadcrumb-item"><a href="#">Produk</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <?php foreach ($produk as $p) { ?>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <article class="article article-style-b">
              <div class="article-header">
                <div class="article-image" data-background="<?= base_url('assets/upload/foto_produk/'.$p['foto_produk']) ?>">
                <img src="<?= base_url('assets/upload/foto_produk/'.$p['foto_produk']) ?>" width="100%" height="100%" />
                </div>
              </div>
              <div class="article-details">
                <div class="article-title">
                  <h2><a href="#"><?= $p['nama_produk'] ?></a></h2>
                </div>
                <p>Rp <?= number_format($p['harga_produk'], 2, '.', ',') ?></p>
                <div class="article-cta">
                  <a href="<?= base_url('tambah-order-pelanggan/'.$p['id_produk']) ?>">Check Out <i class="fas fa-chevron-right"></i></a>
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
        <div class="col-0 col-md-2">
          &nbsp;
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets/img/partner-pembayaran/bca.webp') ?>" width="60%"/>
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets/img/partner-pembayaran/bri.png') ?>" width="60%"/>
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets/img/partner-pembayaran/bni.png') ?>" width="60%"/>
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets/img/partner-pembayaran/mandiri.png') ?>" width="60%"/>
        </div>
        <div class="col-0 col-md-2">
          &nbsp;
        </div>
      </div>
    </div>

    <div class="section-body mt-4 mb-4">
      <h4 class="text-center mb-4">Partner Pembayaran</h4>
      <div class="row">
        <div class="col-0 col-md-3">
          &nbsp;
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets/img/partner-pembayaran/jnt.png') ?>" width="60%"/>
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets/img/partner-pembayaran/jne.png') ?>" width="60%"/>
        </div>
        <div class="col-6 col-md-2">
          <img src="<?= base_url('assets/img/partner-pembayaran/tiki.png') ?>" width="60%"/>
        </div>
        <div class="col-0 col-md-3">
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