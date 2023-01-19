
<div class="container">
        <h1></h1>
    <h2 align="center">TABLE EDIT BARANG</h2>
    <table border = "1" cellpadding = "5" align = "center">
    <thead align = "center">
        <tr class="table1">
	<form action="<?= base_url('/home/aksi_edit_barang/?')?>"method="post">
		<input type="hidden" name="id" value="<?php echo $jojo->id_barang?>">
		<div class="mb-3 mt-3">
			<label for="nama_brg" class="form-label">Nama Barang</label>
			<input type="text" class="form-control" id="nama_brg" placeholder="Isi Nama Barang" name="nama_brg" value="<?php echo $jojo->nama_brg?>">
		</div>

		<div class="mb-3 mt-3">
			<label for="kode_brg" class="form-label">Kode Barang</label>
			<input type="text" class="form-control" id="kode_brg" placeholder="Isi Kode Barang" name="kode_brg"value="<?php echo $jojo->kode_brg?>">
		</div>
		<div class="mb-3 mt-3">
			<label for="stock" class="form-label">Stock Barang</label>
			<input type="text" class="form-control" id="stock" placeholder="Isi Stock Barang" name="stock"value="<?php echo $jojo->stock?>">
		</div>
		<div class="mb-3 mt-3">
			<label for="harga" class="form-label">Harga Barang</label>
			<input type="text" class="form-control" id="harga" placeholder="Isi Harga Barang" name="harga"value="<?php echo $jojo->harga?>">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		
	</form>
</div>

</tr>
</body>
</html>