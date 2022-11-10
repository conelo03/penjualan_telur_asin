<?php $this->load->view('template/header');?>
<?php $this->load->view('template/sidebar');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Kelola Produk</a></div>
        <div class="breadcrumb-item">Tambah Produk</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="<?= base_url('tambah-produk'); ?>" method="post" enctype="multipart/form-data">
              <div class="card-header">
                <h4>Form Tambah Produk</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="<?= set_value('nama_produk'); ?>" required="">
                    <?= form_error('nama_produk', '<span class="text-danger small">', '</span>'); ?>
                  </div>
                  <div class="col-md-3 form-group">
                    <label>Stok Produk</label>
                    <input type="number" name="stok_produk" class="form-control" value="<?= set_value('stok_produk'); ?>" required="">
                    <?= form_error('stok_produk', '<span class="text-danger small">', '</span>'); ?>
                  </div>
                  <div class="col-md-3 form-group">
                    <label>Harga Produk</label>
                    <input type="number" name="harga_produk" class="form-control" value="<?= set_value('harga_produk'); ?>" required="">
                    <?= form_error('harga_produk', '<span class="text-danger small">', '</span>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label>Deskripsi Produk</label>
                  <textarea type="text" name="deskripsi_produk" class="form-control" required=""><?= set_value('deskripsi_produk'); ?></textarea>
                  <?= form_error('deskripsi_produk', '<span class="text-danger small">', '</span>'); ?>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label>Foto Produk</label>
                    <input type="file" name="foto_produk[]" class="form-control" required="" multiple>
                  </div>
                </div>

              </div>

              <div class="card-footer text-right">
                <a href="<?= base_url('produk');?>" class="btn btn-light"><i class="fa fa-arrow-left"></i> Kembali</a>
                <button type="reset" class="btn btn-danger"><i class="fa fa-sync"></i> Reset</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('template/footer');?>