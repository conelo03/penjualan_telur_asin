<?php $this->load->view('template/header');?>
<?php $this->load->view('template/sidebar');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Kelola Produk</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data Produk</h4>
              <div class="card-header-action">
                <a href="<?= base_url('tambah-produk');?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatables-user">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Foto Produk</th>
                      <th>Nama Produk</th>
                      <th>Stok Produk</th>
                      <th>Harga Produk</th>
                      <th class="text-center" style="width: 200px;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1; 
                    foreach($produk as $u):?>
                    <tr>
                      <td class="text-center"><?= $no++;?></td>
                      <td>
                        <div id="carouselExampleControls<?= $u['id_produk'] ?>" class="carousel slide" data-ride="carousel" style="width: 200px;">
                          <div class="carousel-inner">
                          <?php 
                            $images = explode('||', $u['foto_produk']);
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
                          <a class="carousel-control-prev" href="#carouselExampleControls<?= $u['id_produk'] ?>" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls<?= $u['id_produk'] ?>" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </td>
                      <td><?= $u['nama_produk'];?></td>
                      <td><?= $u['stok_produk'];?></td>
                      <td>Rp <?= number_format($u['harga_produk'], '0', ',', '.');?></td>
                      <td class="text-center">
                        <a href="<?= base_url('edit-produk/'.$u['id_produk']);?>" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                        <button class="btn btn-danger" data-confirm="Anda yakin ingin menghapus data ini?|Data yang sudah dihapus tidak akan kembali." data-confirm-yes="document.location.href='<?= base_url('hapus-produk/'.$u['id_produk']); ?>';"><i class="fa fa-trash"></i> Delete</button>
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