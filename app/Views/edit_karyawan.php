<div class="container">
        <h1></h1>
    <h2 align="center">TABLE EDIT KARYAWAN</h2>
    <table border = "1" cellpadding = "5" align = "center">
    <thead align = "center">
        <tr class="table1">
	<form action="<?= base_url('/home/aksi_edit_karyawan/?')?>"method="post">
		<input type="hidden" name="id" value="<?php echo $rizkan->id_user ?>">
		<input type="hidden" name="id2" value="<?php echo $jojo->user ?>">
		<div class="mb-3 mt-3">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control" id="username" placeholder="Isi Username" name="username" value="<?php echo $rizkan->username?>">
		</div>


		<div class="mb-3 mt-3">
			<label for="password" class="form-label">Password</label>
			<input type="Password" class="form-control" id="password" placeholder="Isi Password" name="password"  value="<?php echo $rizkan->password?>">
			 <input type="checkbox" onclick="myFunction()">Tampilkan Password

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
		</div>


		<div class="mb-3 mt-3">
			<label for="email" class="form-label">Email</label>
			<input type="text" class="form-control" id="email" placeholder="Isi Email" name="email" value="<?php echo $rizkan->email?>">
		</div>
		<div class="mb-3 mt-3">
			<label for="nik" class="form-label">NIK</label>
			<input type="text" class="form-control" id="nik" placeholder="Isi NIK" name="nik" value="<?php echo $jojo->nik?>">

		<div class="mb-3 mt-3">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control" id="nama" placeholder="Isi Nama" name="nama" value="<?php echo $jojo->nama?>">
		</div>
		<div class="mb-3 mt-3">
			<label for="jenis" class="form-label">Jenis Kelamin</label>
			<select class="form-control" name ="jenis">
				<option value="<?php echo $jojo->jenis?>">Pilih</option>
				<option value="Laki-laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>

		<div class="mb-3 mt-3">
			<label for="nama" class="form-label">No Hp</label>
			<input type="text" class="form-control" id="nohp" placeholder="Isi No Hp" name="nohp"  value="<?php echo $jojo->nohp?>">
		</div>
		
		<div class="mb-3 mt-3">
			<label for="alamat" class="form-label">Alamat</label>
			<input type="text" class="form-control" id="alamat" placeholder="Isi Alamat" name="alamat"  value="<?php echo $jojo->alamat?>">
		</div>
		<div class="mb-3 mt-3">
			<label for="tgl" class="form-label">Tanggal Lahir</label>
			<input type="date" class="form-control" id="tgl" placeholder="Isi Tanggal Lahir" name="tgl"  value="<?php echo $jojo->tgl?>">
		</div>
		<div class="mb-3 mt-3">
			<label for="tempat" class="form-label">Tempat Lahir</label>
			<input type="text" class="form-control" id="tempat" placeholder="Isi Tempat Lahir" name="tempat"  value="<?php echo $jojo->tempat?>">
		</div>
		<div class="mb-3">
			<label for ="jabatan" class="form-label">Jabatan</label>
			<select class="form-control" id="level" placehoder="Enter Jabatan" name="level" >
				<option value="<?php echo $jojo->level?>">-PILIH-</option>
				<?php

				foreach ($jess as $evan) {
					?>
					<option value ="<?= $evan->id_level?>"><?php echo $evan->nama_level?>

				</option>
			<?php } ?>
		</select>
		<div class="mb-3 mt-3">
			<label for="gaji" class="form-label">Gaji</label>
			<input type="text" class="form-control" id="gaji" placeholder="Isi Gaji" name="gaji"  value="<?php echo $jojo->gaji?>">
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
		
	</form>
	
	
</tr>
</body>
</html>