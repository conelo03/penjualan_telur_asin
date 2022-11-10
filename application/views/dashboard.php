<?php $this->load->view('template/header');?>
<?php $this->load->view('template/sidebar');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="section-header">
      <h6>Selamat Datang di Aplikasi Penjualan Telur Asin</h6>

    </div>

    <div class="section-body">
      <?php if (is_admin()) { ?>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Penjualan Hari Ini</h5>
                </div>
              </div>
              <a href="<?= base_url('order') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-upload"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6><?= $jml_order;?> Penjualan</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Produk</h5>
                </div>
              </div>
              <a href="<?= base_url('produk') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6><?= $jml_produk;?> Produk</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Pelanggan</h5>
                </div>
              </div>
              <a href="<?= base_url('pelanggan') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-users"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6>
                    <?= $jml_pelanggan;?> Pelanggan
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Laporan Penjualan</h5>
                </div>
              </div>
              <a href="<?= base_url('laporan-penjualan') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-paste"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6>Lihat Laporan Penjualan</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Data Order</h5>
                </div>
              </div>
              <a href="<?= base_url('order') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-download"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6>Lihat Data Order</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Riwayat Order</h5>
                </div>
              </div>
              <a href="<?= base_url('admin-riwayat-order') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-list"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6>
                    Lihat Riwayat Order
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Penjualan Produk</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="datatables-user">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 5px">#</th>
                        <th >Nama</th>
                        <th>Jumlah Terjual</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1; 
                      foreach($data_penjualan as $u):?>
                      <tr>
                        <td class="text-center"><?= $no++;?></td>
                        <td><?= $u['nama_produk'];?></td>
                        <td><?= $u['jumlah_terjual'];?></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } else if(is_owner()) { ?>
        <div class="row">
          
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Data Pegawai</h5>
                </div>
              </div>
              <a href="<?= base_url('pegawai') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-users"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6>Lihat Data Pegawai</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Riwayat Order</h5>
                </div>
              </div>
              <a href="<?= base_url('admin-riwayat-order') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-list"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6>
                    Lihat Riwayat Order
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
              <div class="card-stats">
                <div class="card-stats-title">
                  <h5>Laporan Penjualan</h5>
                </div>
              </div>
              <a href="<?= base_url('laporan-penjualan') ?>">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-paste"></i>
                </div>
              </a>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>&nbsp;</h4>
                </div>
                <div class="card-body">
                  <h6>Lihat Laporan Penjualan</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Penjualan Produk</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="datatables-user">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 5px">#</th>
                        <th >Nama</th>
                        <th>Jumlah Terjual</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1; 
                      foreach($data_penjualan as $u):?>
                      <tr>
                        <td class="text-center"><?= $no++;?></td>
                        <td><?= $u['nama_produk'];?></td>
                        <td><?= $u['jumlah_terjual'];?></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  
</div>
<?php $this->load->view('template/footer');?>