<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-edit"></i> Form Update Produk
	</div>

	<?php foreach ($produk as $pro) : ?>

		<form method="post" action="<?php echo base_url('admin/produk/update_aksi') ?>">

			<div class="form-group">
				<label>Nama Produk</label>
				<input type="hidden" name="id_produk" value="<?php echo $pro->id_produk ?>">
				<input type="text" name="nama_produk" class="form-control" value="<?php echo $pro->nama_produk ?> ">
			</div>
			
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $pro->keterangan ?> ">
			</div>

            <div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $pro->harga ?> ">
			</div>

            <div class="form-group">
				<label>Jumlah</label>
				<input type="text" name="jumlah" class="form-control" value="<?php echo $pro->jumlah ?> ">
			</div>
			<button type="submit" class="btn btn-primary">Save</button>
		</form>

	<?php endforeach; ?>
</div>