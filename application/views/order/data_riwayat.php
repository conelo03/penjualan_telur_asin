<?php $this->load->view('template/header');?>
<?php $this->load->view('template/sidebar');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Kelola Order</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Riwayat Order</h4>
              <div class="card-header-action">
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatables-user">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Tgl Order</th>
                      <th>Pelanggan</th>
                      <th>Produk</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Ulasan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1; 
                    foreach($order as $u):?>
                    <tr>
                      <td class="text-center"><?= $no++;?></td>
                      <td><?= $u['tgl_order'];?></td>
                      <td>
                        <?= $u['nama_pelanggan'];?><br>
                        (<?= $u['no_telepon'];?>)<br>
                      </td>
                      <td><?= $u['nama_produk'];?></td>
                      <td><?= $u['jumlah'];?></td>
                      <td>Rp <?= number_format($u['harga'], '0', ',', '.');?></td>
                      <td>
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
                      ?>
                      <br/>
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
                      <?php } else {
                        echo 'Belum ada ulasan.';
                      } ?>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('template/footer');?>