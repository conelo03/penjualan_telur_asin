<?php $this->load->view('template/header');?>
<?php $this->load->view('template/sidebar');?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title?></h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Kelola Order</a></div>
        <div class="breadcrumb-item">Edit Order</div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="<?= base_url('edit-order/'.$order['id_order']); ?>" method="post" enctype="multipart/form-data">
              <div class="card-header">
                <h4>Form Edit Order</h4>
              </div>
              <div class="card-body">
              <div class="row">
                  <div class="col-md-6 form-group">
                    <label>Tgl Order</label>
                    <input type="date" name="tgl_order" class="form-control" value="<?= set_value('tgl_order', $order['tgl_order']); ?>" required="">
                    <?= form_error('tgl_order', '<span class="text-danger small">', '</span>'); ?>
                  </div>
                  <div class="col-md-6 form-group">
                    <label>Pelanggan</label>
                    <select name="id_pelanggan" class="form-control" id="select-pelanggan" data-live-search="true">
                      <option disabled="" selected="">-- Pilih Pelanggan --</option>
                      <?php foreach ($pelanggan as $key) { ?>
                        <option value="<?= $key['id_pelanggan'] ?>" <?= set_value('id_pelanggan', $order['id_pelanggan']) == $key['id_pelanggan'] ? 'selected' : '' ?>><?= $key['nama_pelanggan'] ?></option>
                      <?php } ?>
                    </select>
                    <?= form_error('id_produk', '<span class="text-danger small">', '</span>'); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label>Produk</label>
                    <select name="id_produk" class="form-control" id="select-produk" data-live-search="true">
                      <option disabled="" selected="">-- Pilih Produk --</option>
                      <?php foreach ($produk as $key) { ?>
                        <option value="<?= $key['id_produk'] ?>" <?= set_value('id_produk', $order['id_produk']) == $key['id_produk'] ? 'selected' : '' ?>><?= $key['nama_produk'] ?> - Rp <?= number_format($key['harga_produk'], 0, '.', ',') ?></option>
                      <?php } ?>
                    </select>
                    <?= form_error('id_produk', '<span class="text-danger small">', '</span>'); ?>
                  </div>
                  <div class="col-md-6 form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" value="<?= set_value('jumlah', $order['jumlah']); ?>" required="">
                    <?= form_error('jumlah', '<span class="text-danger small">', '</span>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label>Catatan</label>
                  <input type="text" name="catatan" class="form-control" value="<?= set_value('catatan', $order['catatan']); ?>" required="">
                  <?= form_error('catatan', '<span class="text-danger small">', '</span>'); ?>
                </div>
              </div>

              <div class="card-footer text-right">
                <a href="<?= base_url('order');?>" class="btn btn-light"><i class="fa fa-arrow-left"></i> Kembali</a>
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