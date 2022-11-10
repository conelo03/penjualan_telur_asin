<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
        /*#footer {
          position: fixed;
          left: 0;
            right: 0;
            color: #aaa;
            font-size: 0.9em;
        }

        #footer {
          bottom: 0;
          border-top: 0.1pt solid #aaa;
        }

        .page-number {
          text-align: center;
        }

        .page-number:before {
          content: counter(page);
        }*/
/*        .page-number:before {
          content: "Page " counter(page);
        }*/
    </style>
</head>
<body>
    <div id="footer">
        <div class="page-number"></div>
    </div>
    <div class="container mt-2">
        <div class="mt-2">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-0 text-center"><?= 'Laporan Penjualan' ?></h3>
                            <h4 class="card-title mb-4 text-center"><?= 'Telur Asin Ibu Ida' ?></h4>
                            <h4 class="card-title mb-4 text-center"><?= $dari_tanggal.' s/d '.$sampai_tanggal ?></h4>
                            <table class="table table-striped table-bordered">
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
                                    <?php if($penjualan): ?>
                                        <?php
                                        $no = 1; 
                                        $total = 0;
                                        foreach($penjualan as $u):
                                        $total += $u['harga'];
                                        ?>
                                        <tr>
                                            <td class="text-center" style=""><?= $no++;?></td>
                                            <td><?= $u['tgl_order'];?></td>
                                            <td>
                                                <?= $u['nama_pelanggan'];?><br>
                                                (<?= $u['no_telepon'];?>)<br>
                                            </td>
                                            <td><?= $u['nama_produk'];?></td>
                                            <td><?= $u['jumlah'];?></td>
                                            <td class="text-right">Rp <?= number_format($u['harga'], '0', ',', '.');?></td>
                                        </tr>
                                        <?php endforeach;?>
                                        <tr>
                                            <td colspan="5"  class="text-center">TOTAL</td>
                                            <td class="text-right">Rp <?= number_format($total, 0,',','.');?></td>
                                        </tr>
                                    <?php else: ?>
                                        <tr>
                                            <td class="bg-light" colspan="9">Tidak ada data.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <br/>
                            <table border="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td class="text-center" width="65%" style="font-size: 10pt;"></td>
                                        <td class="text-center" style="font-size: 10pt;">Mengetahui,<br/><br/><br/><br/><br/><br/>Khamidah</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
