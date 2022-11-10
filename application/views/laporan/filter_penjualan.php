<?php $this->load->view('template/header');?>
<?php $this->load->view('template/sidebar');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Kelola Laporan Penjualan</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Penjualan</h4>
              <div class="card-header-action">
              </div>
              
            </div>
            
            <div class="card-body">
              <div class="row">
                  <div class="col-md-2"><h6>Total Penjualan</h6></div>
                  <div class="col-md-10">: <?= 'Rp '.number_format($total, 0,',','.');?></div>
              </div>             
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1; 
                    $total = 0;
                    foreach($penjualan as $u):
                    ?>
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