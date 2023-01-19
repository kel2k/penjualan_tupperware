
<div class="container">
        <h1></h1>
    <h2 align="center">TABLE TAMBAH BARANG KELUAR</h2>
    <table border = "1" cellpadding = "5" align = "center">
    <thead align = "center">
        <tr class="table1">
	<form action="<?= base_url('/home/aksi_tambah_brg_keluar/?')?>"method="post">

		<div class="mb-3 mt-3">
			<label for="id_barang" class="form-label">Id Barang</label>
			<input type="text" class="form-control" id="id_barang" placeholder="Isi Id Barang" name="id_barang">
		</div>

		<div class="mb-3 mt-3">
			<label for="tanggal" class="form-label">Tanggal Barang Keluar</label>
			<input type="date" class="form-control" id="tanggal" placeholder="Isi Tanggal Barang Keluar" name="tanggal">
		</div>

		<div class="mb-3 mt-3">
			<label for="jumlah" class="form-label">Jumlah Barang Keluar</label>
			<input type="text" class="form-control" id="jumlah" placeholder="Isi Jumlah Barang Keluar" name="jumlah">
		</div>
<div class="mb-3 mt-3">
			<label for="jumlah" class="form-label">Kode Barang</label>
			<input type="text" class="form-control" id="kode" placeholder="Kode" name="kode_brg">
		
		<button type="submit" class="btn btn-primary">Submit</button>
		
	</form>
</div>

</tr>
</body>
</html>