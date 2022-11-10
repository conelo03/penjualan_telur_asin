<?php $this->load->view('pelanggan-page/template/header');?>
<?php $this->load->view('pelanggan-page/template/sidebar');?>
<!-- Main Content -->
<div class="main-content" style="padding-top: 100px;">
  <section class="section">
    <div class="section-header">
      <h1>Riwayat Order</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Home</a></div>
        <div class="breadcrumb-item"><a href="#">My Order</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data Riwayat Order</h4>
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
                  <th class="text-center" style="width: 100px;">Aksi</th>
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
                    (<?= $u['no_telepon'];?>)
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
                            <span class="fa fa-star checked-star"></span>
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
                  <td class="text-center">
                    <a class="btn btn-info" href="<?= base_url('ulasan-order/'.$u['id_order']) ?>"><i class="fa fa-edit"></i> Ulasan</a>
                  </td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('pelanggan-page/template/footer');?>