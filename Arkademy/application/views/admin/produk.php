<div class="container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt"></i> Produk
</div>

<?php echo anchor('admin/produk/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>') ?>

<table class="table table-bordered table-striped table-hover mb-3" id="dataTable" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Keterangan</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $no = 1;
            foreach ($produk as $key) :
            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $key->nama_produk; ?></td>
                <td><?php echo $key->keterangan; ?></td>
                <td><?php echo $key->harga; ?></td>
                <td><?php echo $key->jumlah; ?></td>
                <td width="10%"><?php echo anchor('admin/produk/update/' . $key->id_produk, '<div class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></div>') ?> |
                  <?php echo anchor('admin/produk/delete/' . $key->id_produk, '<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
</table>
</div>