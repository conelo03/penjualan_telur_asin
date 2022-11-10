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
    <div class="section-header">
      <h1><?= $produk['nama_produk'] ?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Home</a></div>
        <div class="breadcrumb-item"><a href="#">My Order</a></div>
      </div>
    </div>
    
    <div class="section-body mt-4">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-4">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%;">
                <div class="carousel-inner">
                <?php 
                  $images = explode('||', $produk['foto_produk']);
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
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-12 col-md-12"><h3><?= $produk['nama_produk'] ?></h3></div>
                <div class="col-12 col-md-12">Rp <?= number_format($produk['harga_produk'], 2, '.', ',') ?></div>
                <div class="col-12 col-md-12">&nbsp;</div>
                <div class="col-12 col-md-12"><h6>Stok : <?= $produk['stok_produk'] ?></h6></div>
                <div class="col-12 col-md-12"><h6><?= $produk['deskripsi_produk'] ?></h6></div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <h4>Ulasan :</h4>
            <div class="col-12 col-md-12">
              <?php foreach ($order as $u) { ?>
                <div class="row">
                  <div class="col-12 col-md-12"><h6><?= $u['nama_pelanggan'] ?></h6></div>
                  <div class="col-12 col-md-12">
                    <?php if ($u['rate'] != 0 && $u['rate'] != NULL && $u['ulasan'] != NULL ) { ?>
                    <?php 
                      if ($u['rate'] != 0 || $u['rate'] != NULL) {
                        for ($i=1; $i <= 5; $i++) { 
                          if ($i <= $u['rate']) {?>
                            <span class="fa fa-star" style="color: orange"></span>
                          <?php } else { ?>
                            <span class="fa fa-star"></span>
                          <?php }
                        }
                      }
                    } ?>  
                    <br/>
                      
                  </div>
                  <br>
                  <div class="col-12 col-md-12">
                    <h6>
                      <?php 
                        $ulasan = explode('||', $u['ulasan']);
                        $no = 0;
                        foreach ($ulasan as $key) {
                          if($no == 0){
                            echo 'Variasi: '.$key;
                          }elseif($no == 1){
                            echo 'Jenis: '.$key;
                          }elseif($no == 2){
                            echo 'Kualitas: '.$key;
                          }
                          $no++;
                        }
                      ?>
                    </h6>
                  </div>
                </div>
                <hr>
              <?php } ?>
              
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <a href="<?= base_url('tambah-order-pelanggan/'.$produk['id_produk']) ?>" class="btn btn-info">Check Out</i></a>
        </div>
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