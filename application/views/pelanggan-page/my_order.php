<?php $this->load->view('pelanggan-page/template/header');?>
<?php $this->load->view('pelanggan-page/template/sidebar');?>
<!-- Main Content -->
<div class="main-content" style="padding-top: 100px;">
  <section class="section">
    <div class="section-header">
      <h1>My Order</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Home</a></div>
        <div class="breadcrumb-item"><a href="#">My Order</a></div>
      </div>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>Data Order</h4>
          <div class="card-header-action">
            <a href="<?= base_url('tambah-order-pelanggan');?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Data</a>
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
                  <th>Bukti Pembayaran</th>
                  <th>Status</th>
                  <th class="text-center" style="width: 250px;">Aksi</th>
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
                    <?php if ($u['foto_bukti_tf'] != NULL) { ?>
                      <button class="btn btn-light" data-toggle="modal" data-target="#buktiTf<?= $u['id_order'] ?>"><i class="fa fa-eye"></i> Lihat Bukti Pembayaran</button>
                    <?php } else {
                      echo 'Belum Upload Pembayaran';
                    } ?>
                  </td>
                  <td><?= status($u['status_order']);?></td>
                  <td class="text-center">
                    <?php if($u['status_order'] == 0):?> 
                      <button class="btn btn-light" data-toggle="modal" data-target="#tfModal<?= $u['id_order'] ?>"><i class="fa fa-upload"></i> Upload Bukti Pembayaran</button>
                      <a href="<?= base_url('edit-order-pelanggan/'.$u['id_order']);?>" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                      <button class="btn btn-danger" data-confirm="Anda yakin ingin menghapus data ini?|Data yang sudah dihapus tidak akan kembali." data-confirm-yes="document.location.href='<?= base_url('hapus-order-pelanggan/'.$u['id_order']); ?>';"><i class="fa fa-trash"></i> Delete</button>
                    <?php endif;?>
                    <?php if($u['status_order'] == 3):?> 
                      <button class="btn btn-info" data-confirm="Anda yakin sudah menerima order ini?|Data yang sudah diterima tidak akan kembali." data-confirm-yes="document.location.href='<?= base_url('update-order-pelanggan/'.$u['id_order'].'/4'); ?>';"><i class="fa fa-check"></i> Diterima</button>
                    <?php endif;?>
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

<?php
$no = 1; 
foreach($order as $u):?>
<div class="modal fade" id="tfModal<?= $u['id_order'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kirim Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('upload-bukti-tf-order/'.$u['id_order']) ?>" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <p>Pembayaran bisa di transfer melalui rekening BRI: 585701030840533 a/n KHAMIDAH</p>
        <div class="form-group">
          <label>Upload Bukti Pembayaran</label>
          <input type="file" name="foto_bukti_tf" class="form-control" required="" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach;?>
<?php
$no = 1; 
foreach($order as $u):?>
<div class="modal fade" id="buktiTf<?= $u['id_order'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?= base_url('assets/upload/foto_bukti_tf/'.$u['foto_bukti_tf']) ?>" style="max-width: 450px;" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
<?php $this->load->view('pelanggan-page/template/footer');?>