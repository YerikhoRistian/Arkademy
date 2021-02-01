<div class="container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> Form Input Produk	
	</div>

	<form method="post" action="<?php echo base_url('admin/produk/input_aksi') ?> ">

		<div class="form-group">
			<label> Nama Produk : </label>
			<input type="text" name="nama_produk"  placeholder="Masukan Nama Produk" class="form-control">
		</div>

		<div class="form-group">
			<label> Keterangan :</label>
			<input type="text" name="keterangan"  placeholder="Masukan Keterangan" class="form-control">
		</div>

		<div class="form-group">
			<label>Harga :</label>
			<input type="text" name="harga"  placeholder="Masukan Harga" class="form-control">
		</div>

        <div class="form-group">
			<label>Jumlah :</label>
			<input type="text" name="jumlah"  placeholder="Masukan Jumlah" class="form-control">
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>